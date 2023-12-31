<?php

namespace App\Providers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        if(Schema::hasTable('categories')) {
            View::share('categories', Category::all());
        }

        if(Schema::hasTable('announcements')) {
            View::share('announcements', Announcement::all()->sortByDesc('created_at'));
        }
    }
}