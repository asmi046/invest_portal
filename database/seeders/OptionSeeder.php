<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("options")->insert(
            [
                [
                    "name" => "gubernator_message",
                    "type" => "plan",
                    'title' => 'Написать губернатору',
                    "value" => "https://og.rkursk.ru/send",
                ],

                [
                    "name" => "gubernator_name",
                    "type" => "plan",
                    'title' => 'Имя губернатора',
                    "value" => "Роман Владимирович Старовойт",
                ],

                [
                    "name" => "gubernator_email",
                    "type" => "plan",
                    'title' => 'E-mail губернатора',
                    "value" => "glava@rkursk.ru",
                ],

                [
                    "name" => "gubernator_phone",
                    "type" => "plan",
                    'title' => 'Телефон губернатора',
                    "value" => "+7 (4712) 70-21-21",
                ],

                [
                    "name" => "gubernator_adres",
                    "type" => "plan",
                    'title' => 'Адрес губернатора',
                    "value" => "Красная площадь, д.1, Курск",
                ],

                [
                    "name" => "gubernator_text",
                    "type" => "rich",
                    'title' => 'Текст о губернаторе',
                    "value" => file_get_contents(public_path('old_data//main.html')),
                ],

                //-------------------------

                [
                    "name" => "gcp_sogl_count",
                    "type" => "plan",
                    'title' => 'Заключено соглашений ГЧП',
                    "value" => "30",
                ],

                [
                    "name" => "gcp_sogl_pay",
                    "type" => "plan",
                    'title' => 'Общий объем инвестиций по заключенным соглашениям ГЧП',
                    "value" => "21 236",
                ],

                //-------------------------

                [
                    "name" => "polis_3_work_mest",
                    "type" => "plan",
                    'title' => 'Рабочих мест',
                    "value" => "598",
                ],
                [
                    "name" => "polis_3_invest",
                    "type" => "plan",
                    'title' => 'Объем инвестиций резидентов (млн. р.)',
                    "value" => "39 974,7",
                ],
                [
                    "name" => "polis_3_ploshad",
                    "type" => "plan",
                    'title' => 'Общая площадь (га.)',
                    "value" => "237,05",
                ],
                [
                    "name" => "polis_3_srok",
                    "type" => "plan",
                    'title' => 'Срок существования ОЭЗ (лет)',
                    "value" => "49 лет",
                ],

                //-------------------------

                [
                    "name" => "invest_map_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на инвестиционную карту',
                    "value" => "https://map.kurskoblinvest.ru/",
                ],

                [
                    "name" => "kabinet_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на личный кабинет',
                    "value" => "https://investlk.rkursk.ru",
                ],

                //-------------------------Контакты

                [
                    "name" => "adress",
                    "type" => "plan",
                    'title' => 'Адрес коммитета',
                    "value" => "Моковская, 11а, Курск, Россия",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'E-mail коммитета',
                    "value" => "komitet46ec@yandex.ru",
                ],

                [
                    "name" => "hotline",
                    "type" => "plan",
                    'title' => 'Телефон горячей линни',
                    "value" => "+7 (4712) 330 750",
                ],

                [
                    "name" => "hotline_dob",
                    "type" => "plan",
                    'title' => 'Добавочный номер горячей линни',
                    "value" => "106",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "https://t.me/econom46",
                ],

                [
                    "name" => "vk_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Vk',
                    "value" => "https://vk.com/komeconom46",
                ],


            ]);
    }
}
