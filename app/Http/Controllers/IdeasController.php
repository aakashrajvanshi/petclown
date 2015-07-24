<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Carbon\Carbon;
use Session;
use Image;
use App\Models\Ideas;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $petition = New Ideas();

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
        Session::flash('flash_message', 'Your petition idea has been submitted. Thanks!');
        return redirect('profile/ideas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if(user_is_admin())
        {
            if (is_numeric($id)) {
                $petition = Ideas::findorFail($id);
            } else {
                $petition = Ideas::where('slug', '=', $id)->firstorFail();
            }
        }
        else
        {
            $user = Auth::user();
            if (is_numeric($id)) {
                $petition = Ideas::where('user_id',$user->id)->findorFail($id);
            } else {
                $petition = Ideas::where('user_id',$user->id)->where('slug', '=', $id)->firstorFail();
            }
        }
        return view('ideas.edit', ['petition' => $petition]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if (is_numeric($id)) {
            $petition = Ideas::where('user_id',$user->id)->findorFail($id);
        } else {
            $petition = Ideas::where('user_id',$user->id)->where('slug', '=', $id)->firstorFail();
        }
        return view('ideas.edit', ['petition' => $petition]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $data = $request->all();

        if (is_numeric($id)) {
            $petition = Ideas::where('user_id',$request->user()->id)->findorFail($id);
        } else {
            $petition = Ideas::where('user_id',$request->user()->id)->where('slug', '=', $id)->firstorFail();
        }

        $petition->user_id = $request->user()->id;
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
        Session::flash('flash_message', 'Your petition idea has been submitted. Thanks!');
        return redirect('profile/ideas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Request $request)
    {
        Ideas::findorFail($id)->where('user_id',$request->user()->id)->delete();
        return back();
    }

    public function restore($id, Request $request)
    {
        Ideas::onlyTrashed()->where('user_id',$request->user()->id)->where('id', $id)->restore();
        return back();
    }

}
