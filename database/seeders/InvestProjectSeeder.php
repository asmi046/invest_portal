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
                "files" => [
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_1.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_2.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_3.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_4.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_5.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_6.webp"
                    ],
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno_7.webp"
                    ],

                ]

            ],
            [
                'title' => "АО «Иннпромбиотех»",
                'title_en' => "Innprombiotech JSC",
                'img' => "AO-Innprombioteh.webp",
                'slug' => Str::slug("АО «Иннпромбиотех»"),
                'description' => "AO-Innprombioteh.html",
                'description_en' => "en_AO-Innprombioteh.html",

                "files" => [
                    [
                        "title" => "Информация по проекту",
                        "title_en" => "Project Information",
                        "file" => "zerno-inner.webp"
                    ],
                ]
            ],
        ];


        foreach ($invest_project as $item){
            $adding_item = $item;

            if (isset($adding_item['description']) && !empty($adding_item['description']))
                $adding_item['description'] = file_get_contents(public_path('old_data//invest-project//'.$item['description']));

            if (isset($adding_item['description_en']) && !empty($adding_item['description_en']))
                $adding_item['description_en'] = file_get_contents(public_path('old_data//invest-project//'.$item['description_en']));

            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("invest-project/".$item['img'], file_get_contents(public_path('old_data//invest-project//'.$item['img'])), 'public');
            }

            $adding_item['files'] = json_encode($adding_item['files']);
            $p_id = DB::table("invest_projects")->insertGetId(
                $adding_item
            );

            if (isset($item['files']) && !empty($item['files'])) {
                foreach ($item['files'] as $fitem) {
                    if (empty($fitem['file'])) continue;
                    Storage::disk('public')->put("invest-project/".$fitem['file'], file_get_contents(public_path('old_data/invest-project/'.$fitem['file'])), 'public');
                }
            }
        }

    }
}
