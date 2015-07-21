<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Petition;
use App\Models\Tag;
use App\Models\Category;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.comments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        /** My Work*/
        if($id=="petitionlist")
        {
            $petitions = Petition::orderBy('created_at','desc')->paginate(15);
            return view('admin.petitionlist',compact('petitions'));
        }
        else if($id=="deletedpetitions")
        {
            $petitions = Petition::onlyTrashed()->paginate(15);
            return view('admin.deletedpetitions',compact('petitions'));
        }
        else if($id=="comments")
        {
            $comments = Comment::orderBy('created_at','DESC')->NotReviewed()->paginate(15);
            $comments->load('petition','user');
            return view('admin.comments',compact('comments'));
        }
        else if($id=="blockedusers")
        {
            return view('admin.blockedusers');
        }
        else if($id=="approvedcomments")
        {
            $comments = Comment::orderBy('created_at','DESC')->Approved()->paginate(15);
            $comments->load('petition','user');
            return view('admin.approvedcomments',compact('comments'));
        }
        else if($id=="editcomments")
        {
            return view('admin.editcomments');
        }
        else if($id=="spamcomments")
        {
            return view('admin.spamcomments');
        }
        elseif($id=="flaggedcomments")
        {
            return view('admin.flaggedcomments');
        }
        elseif($id=="deletedcomments")
        {
            $comments = Comment::orderBy('created_at','DESC')->Disapproved()->paginate(15);
            $comments->load('petition','user');
            return view('admin.deletedcomments',compact('comments'));
        }
        else if($id=="spampetitions")
        {
            return view('admin.spampetitions');
        }
        elseif($id=="flaggedpetitions")
        {
            return view('admin.flaggedpetitions');
        }
        elseif($id=="deletedpetitions")
        {
            return view('admin.deletedpetitions');
        }

        /** Completed*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /*
     * Approve a comment
     */
    public function approve($id){
        $comment = Comment::findorFail($id);
        $comment->approved = 1;
        $comment->save();
        return back();
    }

    /*
     * Disapprove a comment
     */
    public function disapprove($id){
        $comment = Comment::findorFail($id);
        $comment->approved = 0;
        $comment->save();
        return back();
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function createpet()
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
    public function storepet(CreatePetitionRequest $request)
    {
        $data = $request->all();

        $petition = New Petition();

        $petition->user_id = Auth::user()->id;
        $petition->heading = $data['heading'];
        $petition->petition_to = $data['petition_to'];
        $petition->content = $data['content'];
        $petition->slug = str_slug($petition->heading, "-");

        if (isset($data['publish'])) {
            $petition->published = true;
        }
        else{
            $petition->published = false;
        }

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
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function editpet($id)
    {
        if (is_numeric($id)) {
            $petition = Petition::findorFail($id);
        } else {
            $petition = Petition::where('slug', '=', $id)->firstorFail();
        }

        $tags = Tag::lists('tag', 'id');
        $category = Category::lists('category', 'id');

        $mytags = $petition->tags()->lists('id')->toArray();

        $mycats = $petition->category()->lists('id')->toArray();


        return view('petition.edit', array('petition' => $petition, 'mytags' => $mytags, 'mycats' => $mycats,'tags'=>$tags,'category'=>$category));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function updatepet($id, Request $request)
    {
        $data = $request->all();

        if (is_numeric($id)) {
            $petition = Petition::findorFail($id);
        } else {
            $petition = Petition::where('slug', '=', $id)->firstorFail();
        }
        $petition->heading = $data['heading'];
        $petition->petition_to = $data['petition_to'];
        $petition->content = $data['content'];

        if (isset($data['publish'])) {
            $petition->published = 1;
        }
        else{
            $petition->published = 0;
        }
        if (isset($data['keepurl'])) {
            //do nothing. Retain the old url
        }
        else{
            $petition->slug = str_slug($petition->heading, "-");
        }

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

        //remove all preexisting tags and categories
        $petition->tags()->detach();
        $petition->category()->detach();

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

        Session::flash('flash_message', 'Your petition has been updated!');

        return redirect('petitions');
    }

    public function delpet($id){
        $petition = Petition::findorFail($id);
        $petition->destroy();
        return back();
    }

    public function undelpet($id){
        $petition = Petition::withTrashed()
                    ->where('id', $id)
                    ->get();
        if ($petition->trashed())
        {
            $petition->restore();
        }
        return back();
    }

}
