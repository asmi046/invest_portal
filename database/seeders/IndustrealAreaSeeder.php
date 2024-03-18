<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;

class IndustrealAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industreal_areas = [
            [
                'title' => "Индустриальный (промышленный) парк «Юбилейный»",
                'title_en' => "Industrial (industrial) Park 'Jubilee'",
                'img' => "ubileini.webp",
                'uk_lnk' => "http://kursk.in/jubilee",
                'uk_name' => "АО «Корпорация развития Курской области»",
                'uk_name_en' => "Kursk Region Development Corporation JSC",
                'btn_lnk' => "http://kursk.in/jubilee",
                'rezident_count' => 7,
                'free_area' => "9,9 га.",
            ],
            [
                'title' => "ПРОМТЕХНОПАРК «СОЮЗ»",
                'title_en' => "SOYUZ INDUSTRIAL TECHNOLOGY PARK",
                'img' => "souz.webp",
                'uk_lnk' => "https://www.es46.ru/contact",
                'uk_name' => "ООО «Энерго-Сервис»",
                'uk_name_en' => "Energo-Service LLC",
                'btn_lnk' => "https://ip-soyuz.ru/",
                'rezident_count' => 5,
                'free_area' => "12,46 га",
            ],
        ];

        foreach ($industreal_areas as $item){
            $adding_item = $item;


            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("invest_areas/".$item['img'], file_get_contents(public_path('old_data//industrial_areas//'.$item['img'])), 'public');
            }

            unset($adding_item['folder']);
            $p_id = DB::table("industreal_areas")->insertGetId(
                $adding_item
            );

        }
    }
}
