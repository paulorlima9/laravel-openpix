<?php

namespace PauloRLima\LaravelOpenPix\Core;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class LaravelOpenPixServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/openpix.php' => config_path('openpix.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->bind('openpix', function () {
            $client = new Client([
                'base_uri' => config('openpix.base_url'),
                'headers' => [
                    'Authorization' => config('openpix.app_id')
                ]
            ]);

            return new LaravelOpenPixService($client);
        });
    }
}
