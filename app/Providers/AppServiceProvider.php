<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Petition;
use Carbon\Carbon;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $popular = Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4);
        $popular->load('comment');
        $latest = Petition::orderBy('created_at','desc')->published()->get()->take(4);
        $latest->load('comment','supportedby');

        $trending = Petition::with(['supportedby' => function($query){
            $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(5));
        }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(4);

        $trending->load('comment');

        //$currentUser1 = Auth::User();

        view()->share(compact('popular','latest','trending'));
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
