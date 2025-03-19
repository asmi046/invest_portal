<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->put("options/governor.jpg", file_get_contents(public_path('old_data/governor.jpg')), 'public');

        DB::table("options")->insert(
            [
                [
                    "name" => "gubernator_dolg",
                    "type" => "plan",
                    'title' => 'Должность губернатора',
                    "value" => "Губернатор Курской области",
                ],

                [
                    "name" => "gubernator_dolg_en",
                    "type" => "plan",
                    'title' => 'Должность губернатора (en)',
                    "value" => "Governor of the Kursk region",
                ],

                [
                    "name" => "gubernator_foto",
                    "type" => "photo",
                    'title' => 'Фото губернатора',
                    "value" => "options/governor.jpg",
                ],

                [
                    "name" => "gubernator_foto_show",
                    "type" => "plan",
                    'title' => 'Показывать Фото губернатора (0/1)',
                    "value" => "1",
                ],

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
                    "name" => "gubernator_name_en",
                    "type" => "plan",
                    'title' => 'Имя губернатора (en)',
                    "value" => "Roman Vladimirovich Starovoit",
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
                    "name" => "gubernator_adres_en",
                    "type" => "plan",
                    'title' => 'Адрес губернатора (en)',
                    "value" => "Red Square, 1, Kursk",
                ],

                [
                    "name" => "gubernator_text",
                    "type" => "rich",
                    'title' => 'Текст о губернаторе',
                    "value" => file_get_contents(public_path('old_data//main.html')),
                ],

                [
                    "name" => "gubernator_text_en",
                    "type" => "rich",
                    'title' => 'Текст о губернаторе (en)',
                    "value" => file_get_contents(public_path('old_data//main_en.html')),
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

                //---------------------------------

                [
                    "name" => "advantage_1",
                    "type" => "plan",
                    'title' => 'Преимущество 1 ',
                    "value" => "Природные ресурсы",
                ],

                [
                    "name" => "advantage_1_en",
                    "type" => "plan",
                    'title' => 'Преимущество 1 (en)',
                    "value" => "Natural resources",
                ],

                [
                    "name" => "advantage_2",
                    "type" => "plan",
                    'title' => 'Преимущество 2 ',
                    "value" => "Энергообеспеченность",
                ],

                [
                    "name" => "advantage_2_en",
                    "type" => "plan",
                    'title' => 'Преимущество 2 (en)',
                    "value" => "Energy security",
                ],

                [
                    "name" => "advantage_3",
                    "type" => "plan",
                    'title' => 'Преимущество 3',
                    "value" => "Логистика",
                ],

                [
                    "name" => "advantage_3_en",
                    "type" => "plan",
                    'title' => 'Преимущество 3 (en)',
                    "value" => "Logistics",
                ],

                [
                    "name" => "advantage_4",
                    "type" => "plan",
                    'title' => 'Преимущество 4',
                    "value" => "Географическое положение",
                ],

                [
                    "name" => "advantage_4_en",
                    "type" => "plan",
                    'title' => 'Преимущество 4 (en)',
                    "value" => "Geographical location",
                ],

                //----------------------------------------

                [
                    "name" => "advantage_1_text",
                    "type" => "plan",
                    'title' => 'Преимущество 1 текст',
                    "value" => "Курская область расположена в центре Курской железорудной провинции, известной, как Курская магнитная аномалия, обеспечивая сырьем российскую и зарубежную металлургию.",
                ],

                [
                    "name" => "advantage_1_text_en",
                    "type" => "plan",
                    'title' => 'Преимущество 1 текст (en)',
                    "value" => "The Kursk Region is located in the center of the Kursk iron ore province, known as the Kursk Magnetic Anomaly, providing raw materials for Russian and foreign metallurgy.",
                ],

                [
                    "name" => "advantage_2_text",
                    "type" => "plan",
                    'title' => 'Преимущество 2 текст',
                    "value" => "Регион обладает высокой энергообеспеченностью и наличием резервов электроэнергетических мощностей за счет работы Курской АЭС. Удельный вес региона в Российской федерации по производству и распределению электроэнергии, газа и воды составляет 1,3 %. Более 70 % вырабатываемой электроэнергии подается в 19 областей России.",
                ],

                [
                    "name" => "advantage_2_text_en",
                    "type" => "plan",
                    'title' => 'Преимущество 2 текст (en)',
                    "value" => "The region has a high energy supply and reserves of electric power capacity due to the operation of the Kursk NPP. The share of the region in the Russian Federation in the production and distribution of electricity, gas and water is 1.3%. More than 70% of the electricity generated is supplied to 19 regions of Russia.",
                ],

                [
                    "name" => "advantage_3_text",
                    "type" => "plan",
                    'title' => 'Преимущество 3 текст',
                    "value" => "По территории области проходят две железнодорожные магистрали: «Москва-Харьков» и «Воронеж-Киев»; расположены три крупных железнодорожных узла: Курск, Льгов, Касторная. Автотрассы и железнодорожная сеть связывают Курскую область с Москвой, Санкт-Петербургом и другими городами России, промышленно-развитыми центрами Украины и Закавказья.",
                ],

                [
                    "name" => "advantage_3_text_en",
                    "type" => "plan",
                    'title' => 'Преимущество 3 текст (en)',
                    "value" => 'Two railway lines run through the territory of the region: "Moscow-Kharkov" and "Voronezh-Kiev"; there are three major railway hubs: Kursk, Lgov, Kastornaya. Highways and a railway network connect the Kursk region with Moscow, St. Petersburg and other cities of Russia, the industrialized centers of Ukraine and Transcaucasia.',
                ],

                [
                    "name" => "advantage_4_text",
                    "type" => "plan",
                    'title' => 'Преимущество 4 текст',
                    "value" => "Курская область динамично развивающийся промышленно- аграрный регион. Территория области занимает площадь 30 тыс. км2 и расположена на пересечении важнейших транспортных и торговых путей России, соединяющих запад и восток, север и юг.",
                ],

                [
                    "name" => "advantage_4_text_en",
                    "type" => "plan",
                    'title' => 'Преимущество 4 текст (en)',
                    "value" => "Kursk region is a dynamically developing industrial and agricultural region. The territory of the region covers an area of 30 thousand km2 and is located at the intersection of the most important transport and trade routes of Russia connecting west and east, north and south.",
                ],

            ]);
    }
}
