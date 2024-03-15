<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Page\Page;
use App\Models\PolResurs;
use Illuminate\Http\Request;
use App\Models\InvestDocument;
use App\Actions\MenuStructAction;

class LawController extends Controller
{
    public function index() {
        $all_docs = InvestDocument::all();
        $page = Page::where('title', "Законодательство")->first();
        $docs_struct = [];
        foreach ($all_docs as $item){
            $docs_struct[$item->subtype][] = $item;
        }

        return view('law', [
            'docs' => $docs_struct,
            'page' => $page
        ]);
    }
}
