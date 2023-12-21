<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }
    public function news_page() {
        return view('newsPage');
    }
    public function news_list() {
        return view('newsList');
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
