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
        \Mail::queue(array('emails.welcome', 'emails.welcometext'), ['name'=>$event->user->name], function($message) use($event)
        {
            $message->to($event->user->email, $event->user->name)->subject('Welcome '.$event->user->name.'!');
        });
    }
}
