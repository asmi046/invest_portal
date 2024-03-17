<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use DB;

class SovetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sovet_data = [
            [
            'slug'=>Str::slug('Совет по улучшению инвестиционного климата'),
            'title' => "Совет по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области",
            'title_en' => "Council for Improving the Investment Climate, Investor Relations, Export Support and Development under the Governor of the Kursk Region",
            'pologenie_title' => "Положение о Совете по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области",
            'pologenie_title_en' => "Regulation on the Council for Improving the Investment Climate, Investor Relations, Export Support and Development under the Governor of the Kursk Region",
            'pologenie' => "432-pg.pdf",
            'sostav' => [
                [
                    'title' => "Состав Совета по улучшению инвестиционного климата, взаимодействию с инвесторами, поддержке и развитию экспорта при Губернаторе Курской области от 07.02.2024 № 35-рг",
                    'title_en' => "The composition of the Council for Improving the investment climate, interaction with investors, support and development of exports under the Governor of the Kursk Region dated 07.02.2024 No. 35-wg",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],

                [
                    'title' => "Состав Совета по улучшению инвестиционного климата и взаимодействию с инвесторами, поддержке и развитию экспорта, утвержденный распоряжением Губернатора Курской области от 21.01.2023 № 23-рг",
                    'title_en' => "The composition of the Council for Improving the investment climate and interaction with investors, support and development of exports, approved by Order of the Governor of the Kursk Region dated 01/21/2023 No. 23-rg",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],
            ],

            'work_planes' => [
                [
                    'title' => "План работы Совета по улучшению инвестиционного климата и взаимодействию с инвесторами на 2024 год",
                    'title_en' => "The Council's work plan for improving the investment climate and investor relations for 2024",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],

                [
                    'title' => "План работы Совета по улучшению инвестиционного климата и взаимодействию с инвесторами на 2023 год",
                    'title_en' => "The Council's work plan for improving the investment climate and investor relations for 2023",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],
            ],

            'protocols' => [
                [
                    'title' => "Протокол № 1 от 04.03.2024 года",
                    'title_en' => "Protocol No. 1 dated 03/04/2024",
                    'year' => "2024",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],

                [
                    'title' => "Протокол № 1 от 03.03.2023 года",
                    'title_en' => "Protocol No. 1 of 03.03.2023",
                    'year' => "2023",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],

                [
                    'title' => "Протокол № 2 от 27.03.2023 года",
                    'title_en' => "Protocol No. 2 of 27.03.2023",
                    'year' => "2023",
                    'description' => "",
                    'description_en' => "",
                    'lnk' => "#"
                ],
            ],

            'video' => [

                    [
                        'title' => "Заседание Совета 23.07.2021 года (доступ к просмотру видео в один клик по ссылке)",
                        'title_en' => "Council meeting on 07/23/2021 (one-click access to the video)",
                        'year' => "2021",
                        'description' => "",
                        'description_en' => "",
                        'lnk' => "#"
                    ],

                    [
                        'title' => "Заседание Совета 23.09.2021 года (доступ к просмотру видео в один клик по ссылке)",
                        'title_en' => "Council meeting on 09/23/2021 (one-click access to the video)",
                        'year' => "2021",
                        'description' => "",
                        'description_en' => "",
                        'lnk' => "#"
                    ],

                    [
                        'title' => "Заседание совета 21.02.2022 года (доступ к просмотру видео в один клик)",
                        'title_en' => "Council meeting on 02/21/2022 (one-click video access)",
                        'year' => "2022",
                        'description' => "",
                        'description_en' => "",
                        'lnk' => "#"
                    ],

            ],
            'description' => "RUS_invest_klimat.html",
            'description_en' => "ENG_invest_klimat.html",
            ]
        ];



        foreach ($sovet_data as $item){
            $adding_item = $item;

            $adding_item['sostav'] = json_encode($adding_item['sostav']);
            $adding_item['work_planes'] = json_encode($adding_item['work_planes']);
            $adding_item['protocols'] = json_encode($adding_item['protocols']);
            $adding_item['video'] = json_encode($adding_item['video']);

            if (!empty($item['pologenie'])) {
                Storage::disk('public')->put("sovets/".$item['pologenie'], file_get_contents(public_path('old_data/sovet/'.$item['pologenie'])), 'public');
            }

            if (isset($adding_item['description']) && !empty($adding_item['description']))
                $adding_item['description'] = file_get_contents(public_path('old_data//sovet//'.$item['description']));

            if (isset($adding_item['description_en']) && !empty($adding_item['description_en']))
                $adding_item['description_en'] = file_get_contents(public_path('old_data//sovet//'.$item['description_en']));

            $p_id = DB::table("sovets")->insertGetId(
                $adding_item
            );
        }

    }
}
