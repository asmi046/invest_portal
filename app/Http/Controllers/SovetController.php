<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Sovet;
use App\Models\Page\Page;
use Illuminate\Http\Request;

class SovetController extends Controller
{
    public function index() {
        $all_sovet = Sovet::all();

        return view('sovet.all-sovet', [
            'all_sovet' => $all_sovet,
        ]);
    }

    public function page($slug) {
        $sovet = Sovet::where('slug',$slug)->first();

        if (!$sovet) abort(404);

        return view('sovet.sovet-page', [
            'page' => $sovet,
        ]);
    }

}
