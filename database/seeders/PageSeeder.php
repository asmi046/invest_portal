<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{

    public function get_all_files($dir, $resolution) {
        $fname = [];

        foreach (glob($dir . '//*'.$resolution) as $fileName) {
            $fname[basename($fileName)] = $dir. "//" . basename($fileName);
        }

        return $fname;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $page_data = [

            'Государственно-частное партнерство в Курской области' => [
                "menu_marker" => "О ГЧП в регионе",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
                "subpage" => [
                    "Перечень мер поддержки ГЧП" => [
                        "text" => "presentattion.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Ответственные по направлению ГЧП" => [
                        "text" => "presentattion.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Информация о проводимых конкурсах ГЧП" => [
                        "text" => "presentattion.html",
                        "img" => "",
                        "banner" => ""
                    ],
                ]
            ],

            'Развитие экспорта' => [
                "menu_marker" => "Развитие экспорта",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Стандарт развития конкуренции' => [
                "menu_marker" => "Стандарт развития конкуренции",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Совет по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области' => [
                "menu_marker" => "Совет по улучшению инвест климата",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'План создания объектов инфраструктуры' => [
                "menu_marker" => "План создания объектов инфраструктуры",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Инвестиционные предложения' => [
                "menu_marker" => "Витрина инвестиционных проектов",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Муниципальный инвестиционный стандарт в Курской области' => [
                "menu_marker" => "Муниципальный инвестиционный стандарт Курской области",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            //----------------------

            'Регламент «одного окна» для инвестора' => [
                "menu_marker" => "Регламент «одного окна» для инвестора (подать заявку)",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Земельные участки и промплощадки' => [
                "menu_marker" => "Подобрать земельный участок",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Меры господдержки' => [
                "menu_marker" => "Меры господдержки",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            // -----------------------------------------------


            'Особая экономическая зона промышленно-производственного типа «Третий полюс»' => [
                "menu_marker" => "ОЭЗ «Третий Полюс»",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Индустриальные парки' => [
                "menu_marker" => "Индустриальные парки",
                "text" => "presentattion.html",
                "img" => "",
                "banner" => "",
            ],


        ];

        include 'PageArrays/HeadPage.php';
        include 'PageArrays/sots-ekonom.php';

        $page_data = array_merge(
            $head_page,
            $sots_ec,
            $page_data
        );

        foreach ($page_data as $key => $item){


            $adding_item = [
                'title'=> $key,
                'slug' => Str::slug($item['menu_marker']),
                'description' => file_get_contents(public_path('old_data//pages//'.$item['text'])),
                'seo_title' => $item["menu_marker"],
                'seo_description' => $key
            ];

            if (!empty($item['banner'])) {
                Storage::disk('public')->put("page_banners/".$item['banner'], file_get_contents(public_path('old_data/pages/banners/'.$item['banner'])), 'public');
                $adding_item['banner'] = Storage::url("page_banners/".$item['banner']);
            }

            if (!empty($item['img'])) {
                Storage::disk('public')->put("page_images/".$item['img'], file_get_contents(public_path('old_data/pages/img/'.$item['img'])), 'public');
                $adding_item['img'] = Storage::url("page_images/".$item['img']);
            }


            $p_id = DB::table("pages")->insertGetId(
                $adding_item
            );

            if (isset($item['subpage'])) {



                foreach ($item['subpage'] as $sp_key => $subitem){
                    $inserted_sub_item = [
                        'title'=> $sp_key,
                        'slug' => Str::slug($sp_key),
                        'parent' => $p_id,
                        'description' => file_get_contents(public_path('old_data//pages//'.$subitem['text'])),
                        'seo_title' => $sp_key,
                        'seo_description' => $sp_key
                    ];

                    if (!empty($subitem['banner'])) {
                        Storage::disk('public')->put("page_banners/".$subitem['banner'], file_get_contents(public_path('old_data/pages/banners/'.$subitem['banner'])), 'public');
                        $inserted_sub_item['banner'] = Storage::url("page_banners/".$subitem['banner']);
                    }

                    if (!empty($subitem['img'])) {
                        Storage::disk('public')->put("page_images/".$subitem['img'], file_get_contents(public_path('old_data/pages/img/'.$subitem['img'])), 'public');
                        $inserted_sub_item['img'] = Storage::url("page_images/".$subitem['img']);
                    }

                    DB::table("pages")->insert(
                        $inserted_sub_item
                    );
                }

            }
        }


    }
}
