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
        $petitions = Petition::with('supportedby')->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);
        $latest = Petition::all()->sortByDesc('created_at')->take(3);

        $trending = Petition::with(['supportedby' => function($query){
            $query->where('user_support_petition.created_at', '>=', Carbon::now()->subDays(3));
        }])->get()->sortByDesc(function($item){ return $item->supportedby->count();})->take(3);

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
