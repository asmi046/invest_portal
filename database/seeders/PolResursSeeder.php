<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use DB;

class PolResursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resurce = [
            [
                'lnk' => "https://kursk.in/",
                'title' => "КОРПОРАЦИЯ РАЗВИТИЯ КУРСКОЙ ОБЛАСТИ",
                'img' => "korp_razvitie.webp",
            ],

            [
                'lnk' => "https://asi.ru/",
                'title' => "Агентство стратегических инициатив",
                'img' => "АСИ.svg",
            ],

            [
                'lnk' => "https://invest.gov.ru/",
                'title' => "Инвесткарта РФ",
                'img' => "invest_karta.png",
            ],

            [
                'lnk' => "https://www.gosuslugi.ru/",
                'title' => "ГосУслуги",
                'img' => "gosuslugi.svg",
            ],

            [
                'lnk' => "http://government.ru/",
                'title' => "Правительство россии",
                'img' => "pravitelstvo_r.svg",
            ],

            [
                'lnk' => "https://selectcr.ru/",
                'title' => "Центральный федеральный округ",
                'img' => "cr.svg",
            ],

            [
                'lnk' => "https://xn--80aapampemcchfmo7a3c9ehj.xn--p1ai/",
                'title' => "Национальные проекты России",
                'img' => "npr.png",
            ],

            [
                'lnk' => "https://xn--l1agf.xn--p1ai/",
                'title' => "Корпорация МСП",
                'img' => "МСП.png",
            ],
        ];

        foreach ($resurce as $item){
            Storage::disk('public')->put("pol_recurses/".$item['img'], file_get_contents(public_path('old_data/PolResurc/'.$item['img'])), 'public');

            DB::table("pol_resurs")->insert(
                [
                    'lnk'=> $item['lnk'],
                    'title'=> $item['title'],
                    'img' => Storage::url("pol_recurses/".$item['img']),
                ]
            );
        }
    }
}
