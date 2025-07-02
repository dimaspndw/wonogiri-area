<?php

namespace DimasPndw\WonogiriArea;

use Illuminate\Support\ServiceProvider;

class WilayahWonogiriServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // publish migrations & seeder
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadSeeds();

        $this->publishes([
            __DIR__.'/database/seeders/WilayahSeeder.php' => database_path('seeders/WilayahSeeder.php'),
        ], 'wilayah-seeds');
    }

    public function register()
    {
        //
    }

    protected function loadSeeds()
    {
        if (method_exists($this->app, 'afterResolving')) {
            $this->app->afterResolving('db.seed', function ($seeder) {
                $seeder->call([
                    \Database\Seeders\WilayahSeeder::class,
                ]);
            });
        }
    }
}
