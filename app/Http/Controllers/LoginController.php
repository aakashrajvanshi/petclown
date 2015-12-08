<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
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

    public function confirmEmail($token){
        $user = User::where('emailtoken', '=', $token)->firstOrFail();
        if(!$user->verified) {
            $user->verified = 1;
            $user->save();
        }
        Auth::login($user);
        return redirect('/')->with('flash_message', 'Thanks, Email Verification Complete!');
     }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function oauth()
    {
        return redirect('/auth/login');
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

    public function callback($provider, Request $request)
    {
        if(!$request->has('error')&&!$request->has('error_code'))
        {
            $user = Socialite::with($provider)->user();

            // OAuth Two Providers

            $token = $user->token;

            // All Providers
            $user->getId();
            $user->getNickname();
            $name = $user->getName();
            $email = $user->getEmail();

            if ($provider == "google")
                $avatar = $user->getAvatar() . "&sz=250";
            else
                $avatar = $user->getAvatar();

            if ($user1 = User::where('email', '=', $email)->first()) {
                $user1->update(['name' => $name, 'remember_token' => $token, 'verified' => true, 'avatar' => $avatar]);
                $this->user = $user1;
                Auth::login($this->user);
            }
            else{
                $ip = user_ip();
                //create the user
                $this->user = User::create(['email' => $email, 'name' => $name, 'remember_token' => $token, 'verified' => true, 'avatar' => $avatar, 'ip_register' => $ip ]);
                Auth::login($this->user);
                event(new UserRegistered(Auth::user()));
            }
            /*
            $this->user = User::updateOrCreate([
                'email' => $email,
            ], ['name' => $name, 'remember_token' => $token, 'verified' => true, 'avatar' => $avatar]);

            Auth::login($this->user);
            */
        }
        else
        {
            return redirect('/auth/login');
        }
        /*
        if(!empty(Session::get('url.intended')))
            return redirect()->intended('/');
        else
            return back();
        */
        return redirect()->intended(URL('petitions'));
    }
}
