<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class InvestProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $invest_project = [
            [
                'title' => "ООО «Курский кролик»",
                'title_en' => "Kursk Rabbit LLC",
                'img' => "OOO-Kurskij-krolik.webp",
                'slug' => Str::slug("ООО «Курский кролик»"),
                'description' => "OOO-Kurskij-krolik.html",
                'description_en' => "en_OOO-Kurskij-krolik.html",
            ],
            [
                'title' => "АО «Иннпромбиотех»",
                'title_en' => "Innprombiotech JSC",
                'img' => "AO-Innprombioteh.webp",
                'slug' => Str::slug("АО «Иннпромбиотех»"),
                'description' => "AO-Innprombioteh.html",
                'description_en' => "en_AO-Innprombioteh.html",
            ],
        ];


        foreach ($invest_project as $item){
            $adding_item = $item;

            if (isset($adding_item['description']) && !empty($adding_item['description']))
                $adding_item['description'] = file_get_contents(public_path('old_data//invest-project//'.$item['description']));

            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("invest-project/".$item['img'], file_get_contents(public_path('old_data//municipal_standart//'.$item['invest-project'])), 'public');
            }

            $p_id = DB::table("invest_projects")->insertGetId(
                $adding_item
            );
        }

    }
}
