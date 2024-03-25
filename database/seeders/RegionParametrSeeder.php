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
                "parametr" => "105,8 %",
                "parametr_en" => "125,9 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "data for 9 months of 2023",
                "parametr_name" => "Индекс производства продукции сельского хозяйства",
                "parametr_name_en" => "Agricultural production index",
                "direction" => 1,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "100,4 %",
                "parametr_en" => "100,4 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "data for 9 months of 2023",
                "parametr_name" => "Объем инвестиций в основной капитал (214 млрд. рублей — оценка)",
                "parametr_name_en" => "The volume of investment in fixed assets",
                "direction" => 0,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "51 074,6 руб.",
                "parametr_en" => "50 778,6 rubles",
                "data_param" => "данные за январь-ноябрь 2023 года",
                "data_param_en" => "data for January-October 2023",
                "parametr_name" => "Среднемесячная номинальная начисленная заработная плата работников",
                "parametr_name_en" => "The average monthly nominal accrued wage of workers",
                "direction" => 1,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "0,3 %",
                "parametr_en" => "0,3 %",
                "data_param" => "данные на 1 января 2024 года",
                "data_param_en" => "Data for January 1, 2024",
                "parametr_name" => "Уровень регистрируемой безработицы",
                "parametr_name_en" => "The level of registered unemployment",
                "direction" => 0,
            ],
            [
                "type" => "Показатели региона",
                "type_en" => "Indicators of the region",
                "parametr" => "623,2 млрд. руб.",
                "parametr_en" => "558,9 billion rubles.",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Объем отгруженных товаров собственного производства, выполненных работ и услуг",
                "parametr_name_en" => "The volume of shipped goods of their own production, work and services performed",
                "direction" => 1,
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
                "parametr" => "109,6 %",
                "parametr_en" => "109,7 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс промышленного производства",
                "parametr_name_en" => "Industrial production index",
                "direction" => 0,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "97,1 %",
                "parametr_en" => "95,9 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс производства по виду деятельности «Добыча полезных ископаемых»",
                "parametr_name_en" => "Production index by type of “mining”",
                "direction" => 0,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "115,8 %",
                "parametr_en" => "116,6 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс производства по виду деятельности «Обрабатывающие производства»",
                "parametr_name_en" => "Production index by type of activity «Production production»",
                "direction" => 1,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "102,6 %",
                "parametr_en" => "102,4 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс производства по виду деятельности «Обеспечение электрической энергией, газом и паром, кондиционирование воздуха»",
                "parametr_name_en" => "Production index by type of activity «Providing electric energy, gas and steam, air conditioning»",
                "direction" => 0,
            ],

            [
                "type" => "Промышленность",
                "type_en" => "Industry",
                "parametr" => "136,6 %",
                "parametr_en" => "137,4 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс производства по виду деятельности «Водоснабжение, водоотведение, организация сбора и утилизации отходов, деятельность по ликвидации загрязнений»",
                "parametr_name_en" => "The production index by type of activity «Water supply, sanitation, organization of the collection and disposal of waste, activities to eliminate pollution»",
                "direction" => 1,
            ],

            [
                "type" => "Сельское хозяйство",
                "type_en" => "Agriculture",
                "parametr" => "Намолочено 5,8 млн. тонн",
                "parametr_en" => "About 6 million tons",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January 1, 2024",
                "parametr_name" => "Зерновые культуры",
                "parametr_name_en" => "Grain crops",
                "direction" => 1,
            ],

            [
                "type" => "Сельское хозяйство",
                "type_en" => "Agriculture",
                "parametr" => "169,6 млн. штук",
                "parametr_en" => "163,3 million pieces",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "data for January-Noyabr 2023",
                "parametr_name" => "Производство яиц",
                "parametr_name_en" => "Production of eggs",
                "direction" => 1,
            ],

            [
                "type" => "Сельское хозяйство",
                "type_en" => "Agriculture",
                "parametr" => "464,9 тыс. тонн",
                "parametr_en" => "427,6 thousand tons",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Производство молока",
                "parametr_name_en" => "Production of milk",
                "direction" => 1,
            ],

            [
                "type" => "Сельское хозяйство",
                "type_en" => "Agriculture",
                "parametr" => "691 тыс. тонн",
                "parametr_en" => "630,3 thousand tons",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Производство скота и птицы (на убой в живом весе)",
                "parametr_name_en" => "Livestock and poultry (for slaughter in live weight)",
                "direction" => 1,
            ],

            [
                "type" => "Сельское хозяйство",
                "type_en" => "Agriculture",
                "parametr" => "Произведено 5,2 млн. тонн",
                "parametr_en" => "About 5.0 million tons",
                "data_param" => "данные на 1 января 2024 года",
                "data_param_en" => "Data for January 1, 2024",
                "parametr_name" => "Производство сахарной свеклы",
                "parametr_name_en" => "Production of sugar beets",
                "direction" => 1,
            ],

            [
                "type" => "Строительство",
                "type_en" => "Construction",
                "parametr" => "106,9 %",
                "parametr_en" => "106,3 %",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Индекс физического объема работ, выполненных по виду деятельности «Строительство»",
                "parametr_name_en" => "Index of the physical volume of work performed by type of «Construction»",
                "direction" => 1,
            ],

            [
                "type" => "Строительство",
                "type_en" => "Construction",
                "parametr" => "619,5 тыс. м2",
                "parametr_en" => "517,1 thousands of square meters",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "Data for January-November 2023",
                "parametr_name" => "Ввод в эксплуатацию жилых домов",
                "parametr_name_en" => "Commissioning of residential buildings",
                "direction" => 1,
            ],

            [
                "type" => "Строительство",
                "type_en" => "Construction",
                "parametr" => "111,3 км",
                "parametr_en" => "31,01 miles",
                "data_param" => "данные за 2023 год",
                "data_param_en" => "data for January-June 2023",
                "parametr_name" => "Ввод в эксплуатацию газовых сетей",
                "parametr_name_en" => "Commissioning of gas networks",
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
