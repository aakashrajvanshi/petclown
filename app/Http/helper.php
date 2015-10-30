<?php




function user_photo_path($id='notdb'){
    if($id === 'db') {
        return '/images/' . Auth::user()->name . '/' ;
    }
    return public_path() . '/images/' . Auth::user()->name . '/' ;
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