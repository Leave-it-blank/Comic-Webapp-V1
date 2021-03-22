<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

       $settings = DB::table('settings')
                  ->where('id', '1')
                  ->first();

       $features = DB::table('features')->where('id', '1')->first();
        View::share([
            
            'settings' => $settings ,
        
           'features' => $features,
         ]);
    }
}
