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


        View::composer(['components.menu.main-menu', 'components.menu.side-menu'], function ($view) {

            $menus = \Cache::rememberForever('all_menues', function () {

                $menusAction = new MenuStructAction();
                $menus = $menusAction->handle();

                return $menus;
            });

            View::share('all_menu', $menus);

        });

        View::composer([
            'components.main-page.gubernator',
            'components.header.controls',
            'page.page_gcp',
            'footer'
        ], function ($view) {

            $opt = \Cache::rememberForever('all_opt', function () {

                $all_options = Option::all();

                $opt = [];

                foreach ($all_options as $otion) {
                    $opt[$otion['name']] = $otion['value'];
                }

                return $opt;
            });



            View::share('optionsa', $opt);
        });
    }
}
