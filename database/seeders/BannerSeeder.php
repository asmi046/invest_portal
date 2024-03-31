<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;


class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'order' => 1,
                'img' => "main-sl-1.webp",
                'title' => "Курская область<br>это сельское хозяйство",
                'title_en' => "Kursk region<br>is agriculture",
                'params' => [
                    [
                        'cerrecter' => "5",
                        'cerrecter_en' => "5",
                        'title' => "млн. тонн сахарной свеклы",
                        'title_en' => "million tons of sugar beet",
                    ],
                    [
                        'cerrecter' => "427,6",
                        'cerrecter_en' => "427,6",
                        'title' => "тыс. тонн молока",
                        'title_en' => "thousand tons of milk",
                    ],
                    [
                        'cerrecter' => "163,3",
                        'cerrecter_en' => "163,3",
                        'title' => "млн. штук яиц",
                        'title_en' => "million pieces of eggs",
                    ],
                ],
            ],
            [
                'order' => 2,
                'img' => "main-sl-2.webp",
                'title' => "Курская область <br> это строительство",
                'title_en' => "Kursk region <br> this is a construction",
                'params' => [
                    [
                        'cerrecter' => "106,3 %",
                        'cerrecter_en' => "106,3 %",
                        'title' => "индекс физического объема работ, выполненных по виду деятельности «Строительство»",
                        'title_en' => 'index of the physical volume of work performed by type of activity "Construction"',
                    ],
                    [
                        'cerrecter' => "517,1",
                        'cerrecter_en' => "517,1",
                        'title' => "тыс. м2 жилых домов введено в эксплуатацию",
                        'title_en' => "thousand m2 of residential buildings put into operation",
                    ],
                    [
                        'cerrecter' => "49,9",
                        'cerrecter_en' => "49,9",
                        'title' => "км. газовых труб введено в эксплуатацию",
                        'title_en' => "km of gas pipes put into operation",
                    ],
                ],
            ],
            [
                'order' => 3,
                'img' => "main-sl-3.webp",
                'title' => "Курская область <br>это поддержка МСП",
                'title_en' => "Kursk region <br>is a support for SMEs",
                'params' => [
                    [
                        'cerrecter' => "157",
                        'cerrecter_en' => "157",
                        'title' => "человек занятость в сфере МСП в 2023 году составила",
                        'title_en' => "The number of people employed in the SME sector in 2023 was",
                    ],
                    [
                        'cerrecter' => "211,4 млн. р.",
                        'cerrecter_en' => "211.4 million rubles",
                        'title' => "Объём поддержки МСП за 2023 год",
                        'title_en' => "The volume of SME support for 2023",
                    ],
                    [
                        'cerrecter' => "40,3 тыс.",
                        'cerrecter_en' => "40.3 thousand",
                        'title' => "Самозанятых в регионе",
                        'title_en' => "Self-employed in the region",
                    ],
                ],
            ],
            [
                'order' => 4,
                'img' => "main-sl-4.webp",
                'title' => "Курская область <br>возможности для Инвесторов",
                'title_en' => "Kursk region <br>opportunities for Investors",
                'params' => [
                    [
                        'cerrecter' => "231,2 млрд. р.",
                        'cerrecter_en' => "231.2 billion rubles.",
                        'title' => "Инвестиции в основной капитал",
                        'title_en' => "Investments in fixed assets",
                    ],
                    [
                        'cerrecter' => "102,9%",
                        'cerrecter_en' => "102,9%",
                        'title' => "Индекс физического объёма инвестиций",
                        'title_en' => "Index of the physical volume of investments",
                    ],
                ],
            ],

        ];

        foreach ($banners as $item){

            $item['params'] = json_encode($item['params']);

            if (!empty($item['img'])) {
                Storage::disk('public')->put("slider/".$item['img'], file_get_contents(public_path('old_data/banner/'.$item['img'])), 'public');
            }

            DB::table("banners")->insert(
                $item
            );
        }


    }
}
