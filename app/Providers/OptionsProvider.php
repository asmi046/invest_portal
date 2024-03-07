<?php

namespace App\Providers;

use App\Models\Option;
use App\Models\Category;
use App\Models\Celebration;
use App\Models\Shop;
use Illuminate\Support\ServiceProvider;
use App\Models\Menu\Menu;

use View;

class OptionsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $all_options = Option::all();
            $menus = Menu::orderBy('order')->get();

            $opt = [];

            foreach ($all_options as $otion) {
                $opt[$otion['name']] = $otion['value'];
            }

            View::share('main_menu', $menus);
            View::share('options', $opt);
        });
    }
}
