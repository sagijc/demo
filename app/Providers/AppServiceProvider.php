<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

      Event::listen('Illuminate\Foundation\Http\Events\RequestHandled', function ( $request) {
          // filter oauth ones
          $_request = json_encode($request);
          Log::debug($_request);
          //Log::debug(json_encode($request->{"request"}));
      });

      Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
          // filter oauth ones
          if (!str_contains($query->sql, 'oauth')) {
              Log::debug($query->sql . ' - ' . serialize($query->bindings));
          }
      });

    }

}
