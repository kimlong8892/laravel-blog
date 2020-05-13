<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\LinkDown;

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
        $listCategory = Category::all();
        view()->share('listCategory', $listCategory);
    }
}
