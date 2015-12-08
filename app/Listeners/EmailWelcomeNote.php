<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailWelcomeNote
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $name = $event->user->name;
        $email = $event->user->email;
        $verified = $event->user->verified;

        if($verified) {
            \Mail::queue(array('emails.welcome', 'emails.welcometext'), ['name' => $name], function ($message) use ($name, $email) {
                $message->to($email, $name)->subject('Welcome ' . $name . '!');
            });
        }
        else{
            $token = $event->user->emailtoken;
            \Mail::queue('emails.confirm', ['name' => $name, 'token' => $token], function ($message) use ($name, $email) {
                $message->to($email, $name)->subject('Confirm your email');
            });
        }
    }
}
