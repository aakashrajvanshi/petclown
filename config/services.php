<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key' => '',
        'secret' => '',
    ],

    'google' => [
        'client_id' => '317015773165-46dnqcau3ibu0n72dkvl9e7inbtf5pab.apps.googleusercontent.com',
        'client_secret' => 'YvIaipvwF_EQyYMgOskdhd6u',
        'redirect' => 'http://petclown.com/callback/google',
    ],

    'facebook' => [
        'client_id' => '391650077697225',
        'client_secret' => '7da3f0515f58520b9dc316d30eada8a2',
        'redirect' => 'http://petclown.com/callback/facebook',
    ],

];
