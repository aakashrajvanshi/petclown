<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EditProfileRequest;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller {

    /*
     * Check if the user is authenticated
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('profile.index',compact('user'));
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
    public function store(EditProfileRequest $request)
    {
        $data = $request->all();
        $user = Auth::user();

        $user->name = $data['name'];
        $user->ismale = $data['gender'];
        $user->alternate_email = $data['email'];
        $user->city = $data['city'];
        $user->country = $data['country'];

        $user->save();
        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        if($id=="edit") {
            $user = Auth::user();
            return view('profile.about', compact('user'));
        }
        else if($id=="settings"){
            return view('profile.settings');
        }
        elseif($id=="activities"){
            return view('profile.activities');
        }
        elseif($id=="privacy"){
            return view('profile.privacy');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

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

}
