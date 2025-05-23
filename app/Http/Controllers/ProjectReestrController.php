<?php

namespace App\Http\Controllers;

use App\Models\Page\Page;
use Illuminate\Http\Request;
use App\Models\ProjectReestr;

class ProjectReestrController extends Controller
{
    public function index() {
        $all_projects = ProjectReestr::all();
        $page = Page::where('title', "Реестр инвестиционных проектов")->first();

        $all_projects_key = [];
        foreach ($all_projects as $item) {
            $all_projects_key[$item->state][] = $item;
        }

        // dd($all_projects_key);

        return view('reest-project.all-projects', [
            'all_projects' => $all_projects_key,
            'page' => $page
        ]);
    }

    public function page($slug) {
        $project = ProjectReestr::where('slug', $slug)->first();

        return view('reest-project.project-page', [
            'page' => $project
        ]);

    }
}
