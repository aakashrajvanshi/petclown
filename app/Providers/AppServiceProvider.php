<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Petition;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $petitions = Petition::with('supportedby')->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);
        $petitions->load('comment');
        $latest = Petition::orderBy('created_at','desc')->published()->get()->take(3);
        $latest->load('comment','supportedby');

        $trending = Petition::with(['supportedby' => function($query){
            $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(3));
        }])->published()->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);

        $trending->load('comment');

        view()->share(compact('petitions','latest','trending'));
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
