<?php

namespace App\Providers;

use Illuminate\Console\Application;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public $bindings =[

    ];

    public $singletons =[

    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        // $this->app->singleton(Connection::class, function (Application $app) {
        //     return new Connection(config('riak'));
        // });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
