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
        $menu_data = [
            "Аналитика Курской области" => [
                "main_lnk" => "/analitics",
                "Социально-экономическое развитие" => "#",
                "О ГЧП в регионе" => "#",
                "Развитие экспорта" => "#",
                "Стандарт развития конкуренции" => "#",
                "Совет по улучшению инвест климата" => "#",
                "План создания объектов инфраструктуры" => "#",
                "Витрина инвестиционных проектов" => "/invest-projects",
                "Муниципальный инвестиционный стандарт Курской области" => "/municipal-standart",
            ],

            "Путь инвестора" => [
                "main_lnk" => "/investor_way",
                "Регламент «одного окна» для инвестора (подать заявку)" => "#",
                "Подобрать земельный участок" => "/cadastr",
                "Меры господдержки" => "#",
            ],

            "Инвестиционные площадки" => [
                "main_lnk" => "/invest_areas",
                "ОЭЗ «Третий Полюс»" => "#",
                "Индустриальные парки" => "#",
                "Реестр земельных участков" => "/cadastr",
            ],

            "Инвестиционная карта" => [
                "main_lnk" => "https://map.kurskoblinvest.ru/",
            ],

            "Навигатор мер поддержки" => [
                "main_lnk" => "/invest_support",
                "Законодательство" => "/law",
                "Меры господдержки" => "#",
            ],

            "Экспертам АСИ" => [
                "main_lnk" => "/asi",
                "Инвестиционный стандрат Курской области 2.0" => "#",
                "Социально-экономическая стратегия развития Курской области" => "#",
                "Меры господдержки" => "#",
                "Линия прямых обращений" => "#",
                "Регламент «одного окна» для инвестора" => "#",
                "Реестр инвестиционных проектов" => "#",
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
                ];

                DB::table("menus")->insert($sub_element);
                $j++;
            }
        }
    }
}
