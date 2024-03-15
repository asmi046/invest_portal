<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\News;
use App\Models\Page\Page;
use App\Models\PolResurs;
use Illuminate\Http\Request;
use App\Models\InvestDocument;
use App\Actions\MenuStructAction;

class CadastrController extends Controller
{
    public function index() {
        $areas = Area::paginate(10);
        $page = Page::where('title', "Реестр земельных участков")->first();

        return view('cadastr', [
            'areas' => $areas,
            'page' => $page
        ]);
    }
}
