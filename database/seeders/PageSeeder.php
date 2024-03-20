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
                "title_en" => "Public-private partnership in the Kursk region",
                "text" => "RUS_public_private_partnership.html",
                "text_en" => "ENG_public_private_partnership.html",
                "img" => "",
                "banner" => "",
                'template' => 'page.page_gcp',
                "subpage" => [
                    "Проекты ГЧП Курской области" => [
                        "text" => "RUS_project_gph_KO.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Информация о проводимых конкурсах ГЧП" => [
                        "text" => "RUS_inform_conkurs_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Практика реализация механизма ГЧП" => [
                        "text" => "RUS_practic_realis_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Перечень мер поддержки ГЧП" => [
                        "text" => "RUS_partnership__list_support_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],
                    "Ответственные по направлению ГЧП" => [
                        "text" => "RUS_partnership__responsible_gph.html",
                        "img" => "",
                        "banner" => ""
                    ],

                ]
            ],

            'Развитие экспорта' => [
                "menu_marker" => "Развитие экспорта",
                "text" => "RUS_export_development.html",
                "img" => "",
                "banner" => "",
                "subpage" => [
                    "Экспортная стратегия" => [
                        "text" => "RUS_export_development__strategy.html",
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
                    "Региональная экспортная программа" => [
                        "text" => "RUS_export_development__region_export_programm.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                    "Мероприятия и итоги исполнения" => [
                        "text" => "RUS_export_development__activities_results_implement.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                    "Реестр экспортеров" => [
                        "text" => "RUS_export_development__register_exporters.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                    "Конкурс «Лучший экспортер»" => [
                        "text" => "RUS_export_development__best_exporter.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                    "Контакты зарубежных торговых представительств" => [
                        "text" => "RUS_export_development__contacts_trade_missions.html",
                        "img" => "",
                        "banner" => "",
                        //"files" => [],
                    ],

                ]
            ],

            'Стандарт развития конкуренции' => [
                "menu_marker" => "Стандарт развития конкуренции",
                'title_en'=>"Competition development standard",
                "text" => "RUS_st_concuration.html",
                "text_en" => "ENG_st_concuration.html",
                "img" => "",
                "banner" => "",
                "files" => [
                    [
                        'title' => "Доклад «Состояние и развитие конкурентной среды на рынках товаров, работ и услуг Курской области» по итогам 2022 года",
                        'title_en' => "The report 'The state and development of the competitive environment in the markets of goods, works and services of the Kursk region' by the end of 2022",
                        'description' => "",
                        'description_en' => "",
                        'file' => "DOKLAD-2022.docx"
                    ],
                    [
                        'title' => "Доклад «Состояние и развитие конкурентной среды на рынках товаров, работ и услуг Курской области» по итогам 2021 года",
                        'title_en' => "The report 'The state and development of the competitive environment in the markets of goods, works and services of the Kursk region' by the end of 2021",
                        'description' => "",
                        'description_en' => "",
                        'file' => "DOKLAD-2021.docx"
                    ],
                    [
                        'title' => "Доклад Курской области за 2020 год",
                        'title_en' => "Kursk Region Report for 2020",
                        'description' => "",
                        'description_en' => "",
                        'file' => "DOKLAD-2020.docx"
                    ],
                    [
                        'title' => "Доклад Курской области за 2019 год",
                        'title_en' => "Kursk Region Report for 2019",
                        'description' => "",
                        'description_en' => "",
                        'file' => "DOKLAD-2019-god.docx"
                    ],


                ],
            ],



            'Совет по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области' => [
                "menu_marker" => "Совет по улучшению инвест климата",
                "text" => "RUS_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'План создания объектов инфраструктуры' => [
                "menu_marker" => "План создания объектов инфраструктуры",
                "title_en" => "The plan for the creation of infrastructure facilities",
                "text" => "RUS_infra_plan.html",
                "text_en" => "ENG_infra_plan.html",
                "img" => "",
                "template" => "page.page_infra_plan",
                "banner" => "",
                "files" => [
                    [
                        'title' => "План создания инвестиционных объектов на 2023-2025 годы",
                        'title_en' => "The plan for the creation of investment facilities for 2023-2025",
                        'description' => "",
                        'description_en' => "",
                        'file' => "Plan-obektov-23025-2-13.pdf"
                    ],
                    [
                        'title' => "Распоряжение Правительства Курской области от 05.04.2023 № 287-рп «Об утверждении Плана создания инвестиционных объектов и объектов инфраструктуры Курской области на 2023-2025 годы»",
                        'title_en' => "Decree of the Government of the Kursk Region dated 04/05/2023 No. 287-rp 'On approval of the Plan for the creation of Investment facilities and infrastructure facilities of the Kursk Region for 2023-2025'",
                        'description' => "",
                        'description_en' => "",
                        'file' => "Plan-obektov-23025.pdf"
                    ],
                    [
                        'title' => "Порядок формирования и ежегодного обновления Плана создания инвестиционных объектов и объектов инфраструктуры в Курской области",
                        'title_en' => "The procedure for the formation and annual updating of the Plan for the creation of investment facilities and infrastructure facilities in the Kursk region",
                        'description' => "",
                        'description_en' => "",
                        'file' => "837-pa.docx"
                    ],
                ]
            ],

            'Инвестиционные предложения' => [
                "menu_marker" => "Витрина инвестиционных проектов",
                "text" => "RUS_invest_projects.html",
                "img" => "",
                "banner" => "industry.webp",
            ],

            'Муниципальный инвестиционный стандарт в Курской области' => [
                "menu_marker" => "Муниципальный инвестиционный стандарт Курской области",
                'title_en' => "Municipal Investment Standard of the Kursk region",
                "text" => "RUS_municipal_investment_standard.html",
                "text_en" => "ENG_municipal_investment_standard.html",
                "img" => "",
                "banner" => "industry.webp",
            ],

            'Индустриальные парки' => [
                "menu_marker" => "Индустриальные парки",
                'title_en' => "Industrial parks",
                "text" => "RUS_industreal_areas.html",
                "text_en" => "ENG_industreal_areas.html",
                "img" => "",
                "banner" => "industry.webp",
                "files" => [
                    [
                        'title' => "Постановление Администрации Курской области от 27.05.2014 № 338-па «Об утверждении Положения об условиях и порядке создания индустриальных (промышленных) парков»",
                        'title_en' => "Resolution of the Administration of the Kursk Region dated 05/27/2014 No. 338-pa 'On approval of the Regulations on the conditions and procedure for the creation of industrial (industrial) parks'",
                        'description' => "",
                        'description_en' => "",
                        'file' => "338-pa-1.pdf"
                    ],

                ]
            ],



            //----------------------

            'Регламент «одного окна» для инвестора' => [
                "menu_marker" => "Регламент «одного окна» для инвестора (подать заявку)",
                "text" => "RUS_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Земельные участки и промплощадки' => [
                "menu_marker" => "Подобрать земельный участок",
                "text" => "RUS_presentattion.html",
                "img" => "",
                "banner" => "",
            ],

            'Меры господдержки' => [
                "menu_marker" => "Меры господдержки",
                'title_en' => "",
                "text" => "RUS_meri_gp.html",
                "text_en" => "ENG_meri_gp.html",
                "img" => "",
                "banner" => "",
            ],

            // -----------------------------------------------


            'Особая экономическая зона промышленно-производственного типа «Третий полюс»' => [
                "menu_marker" => "ОЭЗ «Третий Полюс»",
                "text" => "RUS_presentattion.html",
                "img" => "",
                "banner" => "",
            ],


        ];

        include 'PageArrays/HeadPage.php';
        include 'PageArrays/sots-ekonom.php';
        include 'PageArrays/support.php';

        $page_data = array_merge(
            $head_page,
            $sots_ec,
            $support_pages,
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

            if (isset($item['template']))
                $adding_item['template'] = $item['template'];

            if (isset($item['title_en']))
                $adding_item['title_en'] = $item['title_en'];

            if (isset($item['text_en']))
                $adding_item['description_en'] = file_get_contents(public_path('old_data//pages//'.$item['text_en']));

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

            if (isset($item['img_en']) && !empty($item['img_en'])) {
                Storage::disk('public')->put("page_images/".$item['img_en'], file_get_contents(public_path('old_data/pages/img/'.$item['img_en'])), 'public');
                $adding_item['img_en'] = Storage::url("page_images/".$item['img_en']);
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

                    if (isset($subitem['template']))
                        $inserted_sub_item['template'] = $subitem['template'];

                    if (isset($subitem['title_en']))
                        $inserted_sub_item['title_en'] = $subitem['title_en'];

                    if (isset($subitem['text_en']))
                        $inserted_sub_item['description_en'] = file_get_contents(public_path('old_data//pages//'.$subitem['text_en']));


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

                    if (isset($subitem['img_en']) && !empty($subitem['img_en'])) {
                        Storage::disk('public')->put("page_images/".$subitem['img_en'], file_get_contents(public_path('old_data/pages/img/'.$subitem['img_en'])), 'public');
                        $inserted_sub_item['img_en'] = Storage::url("page_images/".$subitem['img_en']);
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
