<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Petition;
use Carbon\Carbon;
use Auth;
use Event;

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

        $popular = Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4)->load('comment');
        //$popular->load('comment');
        $latest = Petition::orderBy('created_at','desc')->published()->get()->take(4)->load('comment','supportedby');
        //$latest->load('comment','supportedby');

        $trending = Petition::with(['supportedby' => function($query){
            $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(5));
        }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4)->load('comment');

        //$trending->load('comment');

        view()->share(compact('popular','latest','trending'));

        /*
        view()->composer('*', function ($view) {
            $popular = Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4);
            $popular->load('comment');
            $latest = Petition::orderBy('created_at','desc')->published()->get()->take(4);
            $latest->load('comment','supportedby');

            $trending = Petition::with(['supportedby' => function($query){
                $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(5));
            }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4);

            $trending->load('comment');

            $currentUser = Auth::user();

            $view->with(compact('popular','latest','trending','currentUser'));
        });
        */
        /*
        view()->composer('*', function ($view) {
            $view->with('currentUser',Auth::user());
        });
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
