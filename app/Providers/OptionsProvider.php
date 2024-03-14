<?php

namespace App\Providers;

use View;
use App\Models\Shop;
use App\Models\Option;
use App\Models\Category;
use App\Models\Menu\Menu;
use App\Models\Celebration;

use App\Actions\MenuStructAction;
use Illuminate\Support\ServiceProvider;

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
            $menusAction = new MenuStructAction();
            $menus = $menusAction->handle();
            // $menus = [];

            $opt = [];

            foreach ($all_options as $otion) {
                $opt[$otion['name']] = $otion['value'];
            }

            // dd($menus);
            View::share('all_menu', $menus);
            View::share('optionsa', $opt);
        });
    }
}
