<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $main_news = News::orderBy('public_time', "DESC")->take(6)->get();

        return view('index', ['main_news' => $main_news]);
    }
    public function exemple() {
        return view('exemple');
    }

    public function socioEconomicDevelopment() {
        return view('socioEconomicDevelopment');
    }
    public function about_gchp() {
        return view('about_gchp');
    }
    public function presentationRegion() {
        return view('presentationRegion');
    }
    public function industrial_sites() {
        return view('industrial_sites');
    }
}
