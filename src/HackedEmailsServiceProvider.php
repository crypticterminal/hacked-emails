<?php

namespace Daniesy\HackedEmails;


use Illuminate\Support\ServiceProvider;

class HackedEmailsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([ __DIR__."/config/config.php" => config_path('hacked_emails.php') ]);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("HackedEmails", function() {
            return new HackedEmails;
        });
    }
}