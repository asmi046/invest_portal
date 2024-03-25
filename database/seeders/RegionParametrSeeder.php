<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class RegionParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reg_param = [
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "5,7 млн. тонн",
                "parametr_en" => "5.7 million tons",
                "data_param" => "данные на 1 января 2023 года",
                "data_param_en" => "data as of January 1, 2023",
                "parametr_name" => "Валовый сбор (в весе после доработки)",
                "parametr_name_en" => "Gross collection (in weight after completion)",
                "direction" => 1,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "79,3 млн. штук",
                "parametr_en" => "79.3 million pieces",
                "data_param" => "данные за январь-июнь 2023 год",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Производство яиц",
                "parametr_name_en" => "Egg production",
                "direction" => 1,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "0,4 %",
                "parametr_en" => "0,4 %",
                "data_param" => "данные на 1 августа 2023 года",
                "data_param_en" => "data as of August 1, 2023",
                "parametr_name" => "Уровень регистрируемой безработицы",
                "parametr_name_en" => "The level of registered unemployment",
                "direction" => 0,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "0,9 %",
                "parametr_en" => "0,9 %",
                "data_param" => "данные на 1 августа 2023 года",
                "data_param_en" => "data as of August 1, 2023",
                "parametr_name" => "Уровень преступности",
                "parametr_name_en" => "Crime rate",
                "direction" => 0,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "1,5 %",
                "parametr_en" => "1,5 %",
                "data_param" => "данные на 1 августа 2023 года",
                "data_param_en" => "data as of August 1, 2023",
                "parametr_name" => "Доходы населения",
                "parametr_name_en" => "Income of the population",
                "direction" => 0,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "281,6 млрд. руб.",
                "parametr_en" => "281.6 billion rubles.",
                "data_param" => "данные за январь-июнь 2023 года",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Объем отгруженных товаров собственного производства, выполненных работ и услуг",
                "parametr_name_en" => "The volume of shipped goods of own production, completed works and servicesn",
                "direction" => 1,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "81,6 млрд. руб.",
                "parametr_en" => "281.6 billion rubles.",
                "data_param" => "данные за январь-июнь 2023 года",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Объем отгруженных товаров собственного производства, выполненных работ и услуг",
                "parametr_name_en" => "The volume of shipped goods of own production, completed works and servicesn",
                "direction" => 1,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "831,6 млрд. руб.",
                "parametr_en" => "281.6 billion rubles.",
                "data_param" => "данные за январь-июнь 2023 года",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Объем отгруженных товаров собственного производства, выполненных работ и услуг",
                "parametr_name_en" => "The volume of shipped goods of own production, completed works and servicesn",
                "direction" => 1,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "811,6 млрд. руб.",
                "parametr_en" => "281.6 billion rubles.",
                "data_param" => "данные за январь-июнь 2023 года",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Объем отгруженных товаров собственного производства, выполненных работ и услуг",
                "parametr_name_en" => "The volume of shipped goods of own production, completed works and servicesn",
                "direction" => 1,
            ],
        ];

        foreach ($reg_param as $item){

            DB::table("region_parametrs")->insert(
                $item
            );
        }
    }
}
