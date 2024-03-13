<?php

namespace App\Http\Controllers\Page;

use App\Models\Page\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($slug) {

        $page = Page::where('slug', $slug)->first();
        if($page == null) abort('404');

        $child_pages = Page::where('parent', $page->id)->get();
        $parent_page = null;
        if ($page->parent) {
            $parent_page = Page::where('id', $page->parent)->first();
        }

        // dd(count($child_pages));

        $template = 'page.page_no_side_menu';
        if ($page->template) {
            $template=$page->template;
        } else {
            if (count($child_pages) != 0) {
                $template = 'page.page';
            } else {
                $template = 'page.page_no_side_menu';
            }
        }



        return view($template, [
            'page' => $page,
            "puncts" => $child_pages,
            "parent" => $parent_page,
        ]);
    }
}
