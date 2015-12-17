<?php

function user_photo_path($id='notdb'){
    if($id === 'db') {
        return '/images/' . Auth::user()->id . '/' ;
    }
    return public_path() . '/images/' . Auth::user()->id . '/' ;
}

function user_ip(){
    $ipAddress = '';
    // Check for X-Forwarded-For headers and use those if found
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ('' !== trim($_SERVER['HTTP_X_FORWARDED_FOR']))) {
        $ipAddress = trim($_SERVER['HTTP_X_FORWARDED_FOR']);
    } else {
        if (isset($_SERVER['REMOTE_ADDR']) && ('' !== trim($_SERVER['REMOTE_ADDR']))) {
            $ipAddress = trim($_SERVER['REMOTE_ADDR']);
        }
    }
    return $ipAddress;
}

function user_is_admin(\App\Models\User $user){
    if($user->email=="aakash@careerty.com" || $user->email=="arajvanshi@gmail.com")
    {
        return 1;
    }
    else
        return 0;
}


// global CDN link helper function
function cdn( $asset ){
    /* return asset in case of full absolute url*/
    if(substr($asset,0,4)=="http" || substr($asset,0,2)=="//")
        return $asset;

    $cdn = env('CDN_URL','cdn.mrpetition.com');
    return  "//" . $cdn . "/" . ltrim( $asset, "/");
}