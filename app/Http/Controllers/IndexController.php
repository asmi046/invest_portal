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
}
