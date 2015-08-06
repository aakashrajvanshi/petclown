<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\EditProfileRequest;
use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Image;
use App\Models\User;
use App\Models\Ideas;

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
        return view('profile.index',['user' => $user]);
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
        if(!empty($data['image1'])){
            $user->avatar = "/images/default/".$data['image1'];
        }
        if (!empty($data['image'])) {
            $mytime = Carbon::now()->toTimeString();
            $fileName = $data['image']->getClientOriginalName();
            $fileName = $mytime . "-" . $fileName;

            $image = Image::make($data['image']->getRealPath());
            \File::exists(user_photo_path()) or \File::makeDirectory(user_photo_path());

            $image->fit(250, 250)->save(user_photo_path() . $fileName);
            $user->avatar = user_photo_path('db') . $fileName;
        }
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
        if (is_numeric($id)) {
            $user = User::findorFail($id);
        } else {
            $user = User::where('slug', '=', $id)->firstorFail();
        }
        return view('profile.show',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function privacy()
    {
        $user = Auth::user();
        return view('profile.privacy', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function update_privacy(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        if(!empty($data['private']))
        {
            $user->private = true;
            $user->save();
        }
        if(!empty($data['public']))
        {
            $user->private = false;
            $user->save();
        }
        return redirect('profile');
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

    public function ideas(){

        $user = Auth::user();

        $ideas = Ideas::where('user_id',$user->id)->paginate(10);

        return view('profile.ideas',['ideas'=>$ideas, 'user'=>$user]);

    }
    public function delideas(){

        $user = Auth::user();

        $ideas = Ideas::onlyTrashed()->where('user_id',$user->id)->paginate(10);

        return view('profile.delideas',['ideas'=>$ideas, 'user'=>$user]);

    }

    public function editideas($id){

        $user = Auth::user();
        $Idea = Ideas::where('user_id',$user->id)->where('id',$id)->get();
        return view('profile.editidead',['idea'=>$idea, 'user'=>$user]);
    }


}
