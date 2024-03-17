<?php

namespace App\Http\Controllers;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Models\InvestProject;

class InvestProjectController extends Controller
{
    public function index() {
        $all_projects = InvestProject::all();
        $page = Page::where('title', "Инвестиционные предложения")->first();

        return view('invest-project.all-projects', [
            'all_projects' => $all_projects,
            'page' => $page
        ]);
    }

    public function page($slug) {
        $project = InvestProject::where('slug', $slug)->first();

        return view('invest-project.all-projects', [
            'page' => $project
        ]);

    }
}
