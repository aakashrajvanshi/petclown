<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Socialite;
use App\Models\User;
use Auth;
use Redirect;
use Session;

class LoginController extends Controller
{
    protected $user;
    private $provider;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function oauth()
    {
        return view('login.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function oauth2provider($provider)
    {
        return Socialite::with($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = Socialite::with($provider)->user();

        // OAuth Two Providers
        $token = $user->token;

        // All Providers
        $user->getId();
        $user->getNickname();
        $name = $user->getName();
        $email = $user->getEmail();
        if($provider=="google")
            $avatar = $user->getAvatar()."&sz=250";
        else
            $avatar = $user->getAvatar();
        $this->user = User::updateOrCreate([
            'email' => $email,
        ], ['name' => $name, 'remember_token' => $token, 'verified'=>true, 'avatar' => $avatar]);

        Auth::login($this->user);

        if(!empty(Session::get('url.intended')))
            return redirect()->intended('/');
        else
            return back();
    }
}
