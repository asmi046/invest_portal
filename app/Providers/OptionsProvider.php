<?php

namespace App\Providers;

use View;
use App\Models\Shop;
use App\Models\Option;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Menu\Menu;

use App\Models\Celebration;
use App\Actions\MenuStructAction;
use App\Models\InfrastricturPlane;
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


        View::composer(['components.contacts.investor-contacts'], function ($view) {

            $min_ec_contacts = \Cache::rememberForever('min_ec_contacts', function () {
                return Contact::where('text_id', "min_ec")->first();
            });

            $korp_razv_contacts = \Cache::rememberForever('korp_razv_contacts', function () {
                return Contact::where('text_id', "korp_razv")->first();
            });

            // dd($min_ec_contacts,$korp_razv_contacts);
            View::share('min_ec_contacts', $min_ec_contacts);
            View::share('korp_razv_contacts', $korp_razv_contacts);
        });

        View::composer(['components.infra-planes'], function ($view) {

            $infra_planes = \Cache::rememberForever('infra_planes', function () {
                $infra_planes = InfrastricturPlane::select()->orderBy('year', "DESC")->get();
                $pl = [];
                foreach ($infra_planes as $item) {
                    $pl[$item['year']][] = $item;
                }
                return $pl;
            });

            View::share('planes', $infra_planes);
        });

        View::composer([
            'components.menu.main-menu',
            'components.menu.side-menu',
            'components.menu.footer-contacts',
            'page.page_polis_3',
        ], function ($view) {

            $menus = \Cache::rememberForever('all_menues', function () {

                $menusAction = new MenuStructAction();
                $menus = $menusAction->handle();

                return $menus;
            });

            // dd($menus['Меню Третий полюс']);
            View::share('all_menu', $menus);

        });

        View::composer([
            'components.main-page.gubernator',
            'components.header.controls',
            'page.page_gcp',
            'components.main-page.map-section',
            'page.page_polis_3',
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
