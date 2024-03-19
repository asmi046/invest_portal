<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\Page\Page;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index() {
        $all_support = Support::all();
        $page = Page::where('title', 'Меры господдержки')->first();

        $support_st = [];

        foreach ($all_support as $item){
            $support_st[$item['type']][] = $item;
        }

        return view('support.all-support', [
            'all_support' => $support_st,
            'page' => $page,
        ]);
    }

    public function page($slug) {
        $support = Support::where('slug',$slug)->first();

        if (!$support) abort(404);


        return view('support.support-page', [
            'page' => $support,
        ]);
    }
}
