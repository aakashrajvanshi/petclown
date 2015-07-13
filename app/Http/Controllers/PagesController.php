<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Petition;
use Carbon\Carbon;
use DB;


class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        /* moved to AppServiceProvider.php*/

        $activity = DB::table('user_support_petition')
            ->join('users', 'user_support_petition.user_id', '=', 'users.id')
            ->join('petitions', 'user_support_petition.petition_id', '=', 'petitions.id')
            ->orderBy('user_support_petition.created_at','desc')
            ->select('users.id','users.name', 'users.avatar', 'petitions.heading', 'petitions.slug','user_support_petition.created_at')
            ->take(10)->get();

        return view('pages.home',compact('activity'));
    }
}