<?php

function user_photo_path($id='notdb'){
    if($id === 'db') {
        return '/images/' . Auth::user()->name . '/' ;
    }
    return public_path() . '/images/' . Auth::user()->name . '/' ;
}


