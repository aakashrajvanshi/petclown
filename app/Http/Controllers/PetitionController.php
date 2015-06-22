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
        $petitions = Petition::all()->sortByDesc('created_at');

        return view('petition.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('petition.create');
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
        $comments = $petition->comment()->latest()->paginate(3);
        $comments->load('likedBy', 'user');

        if ($request->ajax()) {
            return view('comments.list', array('petition' => $petition, 'comments' => $comments))->render();
        } else {
            return view('petition.show', array('petition' => $petition, 'comments' => $comments));
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