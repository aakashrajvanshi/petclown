<?php

function user_photo_path($id='notdb'){
    if($id === 'db') {
        return '/images/' . Auth::user()->id . '/' ;
    }
    return public_path() . '/images/' . Auth::user()->id . '/' ;
}


function user_is_admin(){
    $user = Auth::user();
    if($user->email=="aakash@careerty.com" ||  $user->email=="suryasteja59@gmail.com")
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