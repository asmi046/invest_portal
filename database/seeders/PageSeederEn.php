<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeederEn extends Seeder
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

            'Public-private partnership in the Kursk region' => [
                "menu_marker" => "About GHP in the region",
                "text" => "ENG_public_private_partnership.html",
                "img" => "",
                "banner" => "",
                "subpage" => [
                    "PPP projects of the Kursk region" => [
                        "text" => "ENG_project_gph_KO.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Information on ongoing PPP competitions" => [
                        "text" => "ENG_inform_conkurs_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Practice implementation of the PPP mechanism" => [
                        "text" => "ENG_practic_realis_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "List of PPP support measures" => [
                        "text" => "ENG_partnership__list_support_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Responsible for PPP" => [
                        "text" => "ENG_partnership__responsible_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],

                ]
            ],

            'Export development' => [
                "menu_marker" => "Export development",
                "text" => "ENG_export_development.html",
                "img" => "",
                "banner" => "",
                "subpage" => [
                    "Export strategy" => [
                        "text" => "ENG_export_development__strategy.html",
                        "img" => "",
                        "banner" => "",
                        "files" => [
                            [
                                'title' => "Приложение 5 Закона Курской области от 14.12.2020 № 100 — ЗКО «О социально-экономического развития Курской области на период до 2030 года»",
                                'title_en' => "Appendix 5 of the Law of the Kursk Region No. 100 dated December 14, 2020 – ZKO “On the socio-economic development of the Kursk Region for the period until 2030”",
                                'description' => "",
                                'description_en' => "",
                                'file' => "Eksportnaya-strategiya.pdf"
                            ],
                            [
                                'title' => "Закон Курской области от 14.12.2020 № 100 — ЗКО «О стратегии социально-экономического развития Курской области на период до 2030»",
                                'title_en' => "Law of the Kursk region dated December 14, 2020 No. 100 – ZKO “On the strategy for the socio-economic development of the Kursk region for the period until 2030”",
                                'description' => "",
                                'description_en' => "",
                                'file' => "100-ZKO-O-strategii-socialno-ekonomicheskogo-razvitiya-KO-do-2030.pdf"
                            ],

                    ],
                    ],
                    "Regional export program" => [
                        "text" => "ENG_export_development__region_export_programm.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],
                    "Activities and results of implementation" => [
                        "text" => "ENG_export_development__activities_results_implement.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],
                    "Register of Exporters" => [
                        "text" => "ENG_export_development__register_exporters.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],
                    "Competition «Best Exporter»" => [
                        "text" => "ENG_export_development__best_exporter.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],
                    "Contacts of foreign trade missions" => [
                        "text" => "ENG_export_development__contacts_trade_missions.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                ]
            ],

            'Стандарт развития конкуренции' => [
                "menu_marker" => "Стандарт развития конкуренции",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Совет по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области' => [
                "menu_marker" => "Совет по улучшению инвест климата",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'План создания объектов инфраструктуры' => [
                "menu_marker" => "План создания объектов инфраструктуры",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Инвестиционные предложения' => [
                "menu_marker" => "Витрина инвестиционных проектов",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Муниципальный инвестиционный стандарт в Курской области' => [
                "menu_marker" => "Муниципальный инвестиционный стандарт Курской области",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            //----------------------

            'Земельные участки и промплощадки' => [
                "menu_marker" => "Подобрать земельный участок",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Меры господдержки' => [
                "menu_marker" => "Меры господдержки",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            // -----------------------------------------------


            'Индустриальные парки' => [
                "menu_marker" => "Индустриальные парки",
                "text" => "ENG_presentattion.html",
                "img" => "",
                "banner" => "",
            ],


        ];

        include 'PageArrays/HeadPage_en.php';
        include 'PageArrays/sots-ekonom_en.php';
        include 'PageArrays/support_en.php';

        $page_data = array_merge(
            $head_page_en,
            $sots_ec_en,
            $support_pages_en,
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

            if (isset($item['files']) && !empty($item['files'])) {
                foreach ($item['files'] as $fitem) {
                    Storage::disk('public')->put("page_files/".$fitem['file'], file_get_contents(public_path('old_data/pages/files/'.$fitem['file'])), 'public');
                }
                $adding_item['files'] = json_encode($item['files']);
            }

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

            if (isset($item['inner_img']) && !empty($item['inner_img'])) {
                foreach ($item['inner_img'] as $fitem) {
                    Storage::disk('public')->put("page_inner_img/".$fitem['file'], file_get_contents(public_path('old_data/pages/inner_img/'.$fitem['file'])), 'public');


                    DB::table("page_inner_images")->insertGetId(
                        [
                            'title' => $fitem['title'],
                            'page_id' => $p_id,
                            'lnk' => $fitem['title'],
                        ]
                    );
                }
            }



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

                    if (isset($subitem['files']) && !empty($subitem['files'])) {
                        foreach ($subitem['files'] as $fsitem) {
                            Storage::disk('public')->put("page_files/".$fsitem['file'], file_get_contents(public_path('old_data/pages/files/'.$fsitem['file'])), 'public');
                        }
                        $inserted_sub_item['files'] = json_encode($subitem['files']);
                    }

                    if (!empty($subitem['banner'])) {
                        Storage::disk('public')->put("page_banners/".$subitem['banner'], file_get_contents(public_path('old_data/pages/banners/'.$subitem['banner'])), 'public');
                        $inserted_sub_item['banner'] = Storage::url("page_banners/".$subitem['banner']);
                    }

                    if (!empty($subitem['img'])) {
                        Storage::disk('public')->put("page_images/".$subitem['img'], file_get_contents(public_path('old_data/pages/img/'.$subitem['img'])), 'public');
                        $inserted_sub_item['img'] = Storage::url("page_images/".$subitem['img']);
                    }

                    $ip_id = DB::table("pages")->insertGetId(
                        $inserted_sub_item
                    );

                    if (isset($subitem['inner_img']) && !empty($subitem['inner_img'])) {
                        foreach ($subitem['inner_img'] as $fitem) {
                            Storage::disk('public')->put("page_inner_img/".$fitem['file'], file_get_contents(public_path('old_data/pages/inner_img/'.$fitem['file'])), 'public');


                            DB::table("page_inner_images")->insertGetId(
                                [
                                    'title' => $fitem['title'],
                                    'page_id' => $ip_id,
                                    'lnk' => $fitem['title'],
                                ]
                            );
                        }
                    }
                }

            }
        }


    }
}
