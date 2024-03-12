<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Menu\Menu;
use App\Models\PolResurs;
use Illuminate\Http\Request;

class GlobalPageController extends Controller
{

    public function analitics() {
        $puncts = Menu::where('menu_name', "Аналитика Курской области")->get();
        return view('global.analitics', ['puncts' => $puncts]);
    }

    public function investor_way() {
        $puncts = Menu::where('menu_name', "Путь инвестора")->get();
        return view('global.way', ['puncts' => $puncts]);
    }

    public function invest_areas() {
        $puncts = Menu::where('menu_name', "Инвестиционные площадки")->get();
        return view('global.invest-areas', ['puncts' => $puncts]);
    }

    public function invest_support() {
        $puncts = Menu::where('menu_name', "Навигатор мер поддержки")->get();
        return view('global.support', ['puncts' => $puncts]);
    }

    public function asi() {
        $puncts = Menu::where('menu_name', "Экспертам АСИ")->get();
        return view('global.asi', ['puncts' => $puncts]);
    }


}
