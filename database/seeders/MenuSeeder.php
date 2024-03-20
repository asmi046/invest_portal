<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eng_word = [
            "Аналитика Курской области"  => "Analytics of the Kursk region",
            "Социально-экономическое развитие" => "Socio-economic development",
            "О ГЧП в регионе" => "About PPP in the region",
            "Развитие экспорта" => "Export development",
            "Стандарт развития конкуренции" => "Competition development standard",
            "Совет по улучшению инвест климата" => "Investment Climate Improvement Council",
            "План создания объектов инфраструктуры" => "The plan for the creation of infrastructure facilities",
            "Витрина инвестиционных проектов" => "Showcase of investment projects",
            "Муниципальный инвестиционный стандарт Курской области" => "Municipal Investment Standard of the Kursk region",
            "Путь инвестора"  => "The Investor's Path",
            "Регламент «одного окна» для инвестора (подать заявку)" => "One-stop shop rules for investors (submit an application)",
            "Подобрать земельный участок" => "Choose a plot of land",
            "Меры господдержки" => "State support measures",
            "Инвестиционные площадки"  => "Investment platforms",
            "ОЭЗ «Третий Полюс»" => "SEZ 'Third Pole'",
            "Индустриальные парки" => "Industrial parks",
            "Реестр земельных участков" => "Register of land plots",
            "Инвестиционная карта" => "Investment Card",
            "Навигатор мер поддержки"  => "Navigator of support measures",
            "Законодательство" => "Legislation",
            "Экспертам АСИ" => "ASI experts",
            "Инвестиционный стандрат Курской области 2.0" => "Investment standard of the Kursk region 2.0",
            "Социально-экономическая стратегия развития Курской области" => "Socio-economic development strategy of the Kursk region",
            "Линия прямых обращений" => "The line of direct appeals",
            "Регламент «одного окна» для инвестора" => "The rules of the 'one window' for the investor",
            "Реестр инвестиционных проектов" => "Register of investment projects",
            "План создания объектов инфраструктуры" => "The plan for the creation of infrastructure facilities",

        ];

        $menu_data = [
            "Аналитика Курской области" => [
                "main_lnk" => "/analitics",
                "Социально-экономическое развитие" => "#",
                "О ГЧП в регионе" => "#",
                "Развитие экспорта" => "#",
                "Стандарт развития конкуренции" => "#",
                "Совет по улучшению инвест климата" => "/sovets/sovet-po-ulucseniiu-investicionnogo-klimata",
                "План создания объектов инфраструктуры" => "#",
                "Витрина инвестиционных проектов" => "/invest-projects",
                "Муниципальный инвестиционный стандарт Курской области" => "/municipal-standart",
            ],

            "Путь инвестора" => [
                "main_lnk" => "/investor_way",
                "Регламент «одного окна» для инвестора (подать заявку)" => "#",
                "Подобрать земельный участок" => "/cadastr",
                "Меры господдержки" => "/supports",
            ],

            "Инвестиционные площадки" => [
                "main_lnk" => "/invest_areas",
                "ОЭЗ «Третий Полюс»" => "#",
                "Индустриальные парки" => "/industrial_areas",
                "Реестр земельных участков" => "/cadastr",
            ],

            "Инвестиционная карта" => [
                "main_lnk" => "https://map.kurskoblinvest.ru/",
            ],

            "Навигатор мер поддержки" => [
                "main_lnk" => "/invest_support",
                "Законодательство" => "/law",
                "Меры господдержки" => "/supports",
            ],

            "Экспертам АСИ" => [
                "main_lnk" => "/asi",
                "Инвестиционный стандрат Курской области 2.0" => "#",
                "Социально-экономическая стратегия развития Курской области" => "/page/socialno-ekonomiceskoe-razvitie",
                "Меры господдержки" => "/supports",
                "Линия прямых обращений" => "#",
                "Регламент «одного окна» для инвестора" => "#",
                "Реестр инвестиционных проектов" => "/invest-projects",
                "План создания объектов инфраструктуры" => "#",
            ]

        ];




        $i = 1;
        foreach ( $menu_data as $key => $item) {

            $element = [
                'menu_name' => "Общее меню",
                'lnk' => $item['main_lnk'],
                'order' => $i,
                'parent' => 0,
                'title' => $key,
                'title_en' => $eng_word[$key],
            ];

            $p_id = DB::table("menus")->insertGetId($element);

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;


                $sub_element = [
                    'menu_name' => "Общее меню",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => $p_id,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
            $i++;
        }

        $i = 1;
        foreach ( $menu_data as $key => $item) {
            $element = [
                'menu_name' => "Меню в шапке",
                'lnk' => $item['main_lnk'],
                'order' => $i,
                'parent' => 0,
                'title' => $key,
                'title_en' => $eng_word[$key],
            ];

            $p_id = DB::table("menus")->insertGetId($element);
        }


        foreach ( $menu_data as $key => $item) {
            if ($key !== "Аналитика Курской области") continue;

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;

                $sub_element = [
                    'menu_name' => "Аналитика Курской области",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => 0,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }

        foreach ( $menu_data as $key => $item) {
            if ($key !== "Путь инвестора") continue;

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;

                $sub_element = [
                    'menu_name' => "Путь инвестора",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => 0,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }

        foreach ( $menu_data as $key => $item) {
            if ($key !== "Инвестиционные площадки") continue;

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;

                $sub_element = [
                    'menu_name' => "Инвестиционные площадки",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => 0,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }

        foreach ( $menu_data as $key => $item) {
            if ($key !== "Навигатор мер поддержки") continue;

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;

                $sub_element = [
                    'menu_name' => "Навигатор мер поддержки",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => 0,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }

        foreach ( $menu_data as $key => $item) {
            if ($key !== "Экспертам АСИ") continue;

            $j = 0;
            foreach ($item as $key => $subitem) {
                if ($key === "main_lnk") continue;

                $m_lnk = ($subitem === "#")?'/page/'.Str::slug($key):$subitem;

                $sub_element = [
                    'menu_name' => "Экспертам АСИ",
                    'lnk' => $m_lnk,
                    'order' => $j,
                    'parent' => 0,
                    'title' => $key,
                    'title_en' => $eng_word[$key],
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }

        $contacts_menue = [
            [
                'menu_name' => "Меню контактов",
                'lnk' => "/page/liniia-priamyx-obrashhenii",
                'order' => 1,
                'parent' => 0,
                'title' => "Линия прямых обращений",
                'title_en' => "The line of direct appeals",
            ],
            [
                'menu_name' => "Меню контактов",
                'lnk' => "/page/kontakty-dlia-investora",
                'order' => 2,
                'parent' => 0,
                'title' => "Контакты для инвестора",
                'title_en' => "Investor Contacts",
            ],
        ];

        DB::table("menus")->insert($contacts_menue);

        $polis_menue = [
            [
                'menu_name' => "Меню Третий полюс",
                'lnk' => "/page/nalogovye-lgoty-dlia-rezidentov-osoboi-ekonomiceskoi-zony-promyslenno-proizvodstvennogo-tipa-tretii-polius",
                'order' => 1,
                'parent' => 0,
                'title' => "Налоговые льготы",
                'title_en' => "Tax benefits",
            ],
            [
                'menu_name' => "Меню Третий полюс",
                'lnk' => "https://kursk.in/third_pole",
                'order' => 2,
                'parent' => 0,
                'title' => "Управляющая компания",
                'title_en' => "Management company",
            ],
        ];

        DB::table("menus")->insert($polis_menue);
    }
}
