<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Petition;
use Carbon\Carbon;


class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        //$petitions = Petition::all()->sortByDesc(function ($item){ return $item->supportedby()->count();})->take(3);
        $petitions = Petition::with('supportedby')->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);
        $latest = Petition::all()->sortByDesc('created_at')->take(3);
        $trending = Petition::with(['supportedby' => function($query){
            $query->where('user_support_petition.created_at', '>=', Carbon::now()->subWeeks(1));
            }])->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);
        return view('pages.home', compact('petitions','latest','trending'));
    }
}