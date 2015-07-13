<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetitionRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Carbon\Carbon;
use Session;
use Image;
use App\Models\Petition;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Category;
use DB;

class PetitionController extends Controller {

    /*
	 * Check if the user is authenticated

    public function __construct()
    {
        parent::__construct();
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $petitions_all = Petition::with('supportedby')->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(12);
        $latest_all = Petition::orderBy('created_at','desc')->paginate(12);
        $trending_all = Petition::with(['supportedby' => function($query){
                    $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(3));
                    }])->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(12);

        $trending_all->load('supportedby');
        $activity = DB::table('user_support_petition')
            ->join('users', 'user_support_petition.user_id', '=', 'users.id')
            ->join('petitions', 'user_support_petition.petition_id', '=', 'petitions.id')
            ->orderBy('user_support_petition.created_at','desc')
            ->select('users.id','users.name', 'users.avatar','petitions.petition_to', 'petitions.heading', 'petitions.slug','user_support_petition.created_at')
            ->take(10)->get();
        foreach($activity as $act)
        {
            $act->created_at = Carbon::parse($act->created_at);
        }
        return view('petition.index', compact('petitions_all','latest_all','trending_all','activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::lists('tag', 'id');
        $category = Category::lists('category', 'id');
        return view('petition.create', compact('tags','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreatePetitionRequest $request)
    {
        $data = $request->all();

        $petition = New Petition();

        $petition->user_id = Auth::user()->id;
        $petition->heading = $data['heading'];
        $petition->petition_to = $data['petition_to'];
        $petition->content = $data['content'];
        $petition->slug = str_slug($petition->heading, "-");

        if (!empty($data['image'])) {
            $mytime = Carbon::now()->toTimeString();
            $fileName = $data['image']->getClientOriginalName();
            $fileName = $mytime . "-" . $fileName;
            $thumbnail = "thumb_" . $fileName;

            $image = Image::make($data['image']->getRealPath());

            \File::exists(user_photo_path()) or \File::makeDirectory(user_photo_path());

            if ($image->width() > 960) {
                $image->resize(960, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            if ($image->height() > 600) {
                $image->resize(null, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $image->save(user_photo_path() . $fileName);
            $petition->image = user_photo_path('db') . $fileName;

            $image->fit(320, 180)->save(user_photo_path() . $thumbnail);
            $petition->image_thumb = user_photo_path('db') . $thumbnail;
        }
        $petition->save();
        $comment = new Comment;
        $comment->user_id = $petition->user_id;
        $comment->petition_id = $petition->id;
        $comment->comment = "I have just created this petition. If you like it, please support it!";
        $comment->save();

        foreach($data['tags'] as $tag)
        {
            $alltags = Tag::lists('id');
            if($alltags->contains($tag)){
                $petition->tags()->attach($tag);
            }
            else
            {
                $newtag = new Tag;
                $newtag->tag = $tag;
                $newtag->save();
                $petition->tags()->attach($newtag->id);
            }
        }
        foreach($data['category'] as $cat)
        {
            $allcats = Category::lists('id');
            if($alltags->contains($cat)){
                $petition->category()->attach($cat);
            }
            else
            {
                $newcat = new Category;
                $newcat->category = $cat;
                $newcat->save();
                $petition->category()->attach($newcat->id);
            }
        }

        Session::flash('flash_message', 'Your petition has been created!');

        return redirect('petitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Request $request)
    {
        if (is_numeric($id)) {
            $petition = Petition::findorFail($id);
        } else {
            $petition = Petition::where('slug', '=', $id)->firstorFail();
        }
        $comments = $petition->comment()->latest()->paginate(4);
        $comments->load('likedBy', 'user');

        $tags = $petition->tags()->get();
        $categories = $petition->category()->get();

        if ($request->ajax()) {
            return view('comments.list', array('petition' => $petition, 'comments' => $comments))->render();
        } else {
            return view('petition.show', array('petition' => $petition, 'comments' => $comments, 'tags' => $tags, 'categories' => $categories));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Patch the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function patch($id)
    {
        //
    }

}