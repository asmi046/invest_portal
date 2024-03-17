<?php

namespace App\Http\Controllers;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Actions\MenuStructAction;
use App\Models\MunitipalStandart;

class MunicipalController extends Controller
{
    public function index() {
        $all_ms = MunitipalStandart::all();
        $page = Page::where('title', "Муниципальный инвестиционный стандарт в Курской области")->first();

        $m_standart = [];
        foreach ($all_ms as $item){
            $m_standart[$item->type][] = $item;
        }


        return view('municipal-standart.municipal-standart', [
            'm_standart' => $m_standart,
            'page' => $page
        ]);
    }

    public function page($slug) {
        $standart = MunitipalStandart::where('slug', $slug)->first();

        return view('municipal-standart.municipal-standart-page', [
            'page' => $standart
        ]);

    }
}
