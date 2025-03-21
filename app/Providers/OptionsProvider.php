<?php

namespace App\Providers;

use View;
use App\Models\Shop;
use App\Models\Option;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Menu\Menu;

use App\Models\Celebration;
use App\Models\OneWinReglament;
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


        View::composer(['components.one-win.schem'], function ($view) {

            $reglamen_schem = \Cache::rememberForever('reglamen_schem', function () {
                return OneWinReglament::all();
            });

            View::share('one_win_reglament', $reglamen_schem);
        });

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

        View::composer(['components.contacts.ghp-contacts'], function ($view) {

            $ghp_contacts = \Cache::rememberForever('ghp_contacts', function () {
                return Contact::where('selector', "Ответственные по направлению ГЧП")->get();
            });

            View::share('ghp_contacts', $ghp_contacts);
        });

        View::composer(['page.page_invest_komitet'], function ($view) {

            $invest_comitet_contacts = \Cache::rememberForever('invest_comitet_contacts', function () {
                return Contact::where('selector', "Инвестиционный комитет Курской области")->get();
            });

            // dd($invest_comitet_contacts);
            View::share('invest_comitet_contacts', $invest_comitet_contacts);
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
            'page.page_one_window',
            'page.page_invest_standart_2',
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
            'index',
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
