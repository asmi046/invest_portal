<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('s');
        if ($query) {
            $pages = Page::where('title', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orWhere('title_en', 'like', '%' . $query . '%')
                ->orWhere('description_en', 'like', '%' . $query . '%')
                ->get();

            $news = News::where('title', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->get();

            return view('search', ['s' => $query, 'results' => ['pages' => $pages, 'news' => $news]]);
        }
        return view('search', ['s' => $query, 'results' => null]);
    }
}
