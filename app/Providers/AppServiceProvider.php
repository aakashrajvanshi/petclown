<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Petition;
use Carbon\Carbon;
use Auth;
use Event;
use Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        Event::listen('illuminate.query', function($query)
        {
            var_dump($query);
        });
        */
        /*
        $minutes = env('QUERY_CACHE_DURATION', 60);

        $popular = Cache::remember('popular', $minutes, function() {
            return Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4)->load('comment');
        });

        $latest = Cache::remember('latest', $minutes, function() {

            return Petition::orderBy('created_at','desc')->published()->get()->take(4)->load('comment','supportedby');

        });

        $trending = Cache::remember('trending', $minutes, function() {

           return  Petition::with(['supportedby' => function($query){
               $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(5));
           }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4)->load('comment');

        });

        view()->share(compact('popular','latest','trending'));
    */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
