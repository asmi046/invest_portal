<?php

namespace App\Http\Controllers;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Models\IndustrealArea;

class IndustrialAreasController extends Controller
{
    public function index() {
        $all_areas = IndustrealArea::all();
        $page = Page::where('title', "Индустриальные парки")->first();

        return view('industrial_areas', [
            'all_areas' => $all_areas,
            'page' => $page
        ]);
    }

}
