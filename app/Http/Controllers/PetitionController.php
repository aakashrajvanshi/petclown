<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetitionRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Carbon\Carbon;
use Session;
use Image;
use Cache;
use App\Models\Petition;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Category;
use DB;

class PetitionController extends Controller {

    /*
	 * Check if the user is authenticated

    public function __construct()
    {
        parent::__construct();
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $minutes = env('QUERY_CACHE_DURATION', 60);

        $popular_all = Cache::remember('popular_all', $minutes, function () {
            return Petition::with('supportedby')->published()->get()->sortByDesc(function ($item) {
                return $item->supportedby->count();
            })->take(12);
        });
        //$petitions_all = Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(12);
        if ($request->has('page'))
            $page = $request->input('page');
        else
            $page = 1;
        $cachekey = 'latest_' . $page;
        $latest_all = Cache::remember($cachekey, $minutes, function () {
            $latest = Petition::orderBy('created_at', 'desc')->published()->paginate(12);
            $latest->load('supportedby');

            return $latest;
        });

        /*
        $latest_all = Petition::orderBy('created_at','desc')->published()->paginate(12);
        $latest_all->load('supportedby');
        */
        $trending_all = Cache::remember('trending_all', $minutes, function () {
            return Petition::with(['supportedby' => function ($query) {
                $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(3));
            }])->published()->get()->sortByDesc(function ($item) {
                return $item->supportedby->count();
            })->take(12);
        });
        /*
        $trending_all = Petition::with(['supportedby' => function($query){
                    $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(3));
                    }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(12);

        $trending_all->load('supportedby');
        */
        $activity = Cache::remember('activity_all', $minutes, function () {

            $activity = DB::table('user_support_petition')
                ->join('users', 'user_support_petition.user_id', '=', 'users.id')
                ->join('petitions', 'user_support_petition.petition_id', '=', 'petitions.id')
                ->orderBy('user_support_petition.created_at', 'desc')
                ->select('users.id', 'users.name', 'users.avatar', 'petitions.petition_to', 'petitions.heading', 'petitions.slug', 'user_support_petition.created_at')
                ->take(15)->get();
            foreach ($activity as $act) {
                $act->created_at = Carbon::parse($act->created_at);
            }

            return $activity;
        });

        /*
            $activity = DB::table('user_support_petition')
            ->join('users', 'user_support_petition.user_id', '=', 'users.id')
            ->join('petitions', 'user_support_petition.petition_id', '=', 'petitions.id')
            ->orderBy('user_support_petition.created_at','desc')
            ->select('users.id','users.name', 'users.avatar','petitions.petition_to', 'petitions.heading', 'petitions.slug','user_support_petition.created_at')
            ->take(15)->get();
            foreach($activity as $act)
            {
                $act->created_at = Carbon::parse($act->created_at);
            }
        */

        return view('petition.index', ['popular_all' => $popular_all, 'latest_all' => $latest_all, 'trending_all' => $trending_all, 'activity' => $activity]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Request $request)
    {
        $minutes = env('QUERY_CACHE_DURATION', 60);

        $petition = Cache::remember($id, $minutes, function () use ($id) {
            if (is_numeric($id)) {
                return Petition::findorFail($id)->load('user');
            } else {
                return Petition::where('slug', '=', $id)->firstorFail()->load('user');
            }
        });

        $supportkey = 'support' . $petition->id;

        $petition = Cache::remember($supportkey, $minutes, function () use ($petition) {
            $petition->load('supportedby');

            return $petition;
        });

        if ($request->has('page'))
            $page = $request->input('page');
        else
            $page = 1;

        //   $comments = $petition->comment()->latest()->paginate(3);
        //   $comments->load('user', 'likedBy');

        $commenttag = 'comment' . $petition->id;
        $commentkey = 'comment' . $petition->id . '_' . $page;
        $comments = Cache::tags($commenttag)->remember($commentkey, $minutes, function () use ($petition) {
            $comments = $petition->comment()->latest()->paginate(3);
            $comments->load('user');
            return $comments;
        });

        $likestag = 'clikes' . $petition->id;
        $likeskey = 'clikes' . $petition->id . '_' . $page;
        $comments = Cache::tags($likestag)->remember($likeskey, $minutes, function () use ($comments) {
            $comments->load('likedBy');

            return $comments;
        });

        $tagskey = 'tag' . $id;
        $catskey = 'cat' . $id;

        $tags = Cache::remember($tagskey, $minutes, function () use ($petition) {
            return $petition->tags()->get();
        });

        $categories = Cache::remember($catskey, $minutes, function () use ($petition) {
            return $petition->category()->get();
        });

        if ($request->ajax()) {
            return view('comments.list', ['petition' => $petition, 'comments' => $comments])->render();
        } else {
            return view('petition.show', ['petition' => $petition, 'comments' => $comments, 'tags' => $tags, 'categories' => $categories]);
        }
    }

}