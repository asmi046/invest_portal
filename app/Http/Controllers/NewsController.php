<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $all_news = News::orderBy('public_time', "DESC")->paginate(9);
        return view('news.news-list', ['all_news' => $all_news]);
    }

    public function page($slug) {
        $news = News::where('slug', $slug)->first();

        if($news == null) abort('404');

        return view('news.news-page', ['news' => $news]);
    }
}
