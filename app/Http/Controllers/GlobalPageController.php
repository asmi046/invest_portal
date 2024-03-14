<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Menu\Menu;
use App\Models\Page\Page;
use App\Models\PolResurs;
use Illuminate\Http\Request;

class GlobalPageController extends Controller
{

    public function analitics() {
        $puncts = Menu::where('menu_name', "Аналитика Курской области")->get();
        $page_text = Page::where('title', 'Аналитика Курской области')->first();
        return view('global.analitics', ['puncts' => $puncts, 'info' => $page_text]);
    }

    public function investor_way() {
        $puncts = Menu::where('menu_name', "Путь инвестора")->get();
        $page_text = Page::where('title', 'Путь инвестора')->first();
        return view('global.way', ['puncts' => $puncts, 'info' => $page_text]);
    }

    public function invest_areas() {
        $puncts = Menu::where('menu_name', "Инвестиционные площадки")->get();
        $page_text = Page::where('title', 'Инвестиционные площадки')->first();
        return view('global.invest-areas', ['puncts' => $puncts, 'info' => $page_text]);
    }

    public function invest_support() {
        $puncts = Menu::where('menu_name', "Навигатор мер поддержки")->get();
        $page_text = Page::where('title', 'Навигатор мер поддержки')->first();
        return view('global.support', ['puncts' => $puncts, 'info' => $page_text]);
    }

    public function asi() {
        $puncts = Menu::where('menu_name', "Экспертам АСИ")->get();
        $page_text = Page::where('title', 'Экспертам АСИ')->first();
        return view('global.asi', ['puncts' => $puncts, 'info' => $page_text]);
    }


}
