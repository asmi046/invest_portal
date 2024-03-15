<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunitipalStandartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_munitipal = [
            [
                'name' => 'Город Курск',
                'type' => 'Город',
                'title' => 'Город Курск Курской области',
                'glava' => 'Куцак Игорь Вячеславович',
                'address' => '305000, Курская область, г. Курск, ул. Ленина, 1',
                'phone' => '8 (4712) 55-47-01',
                'site' => 'https://www.kurskadmin.ru',
                'email' => 'gorod@kurskadmin.ru',
                'folder' => 'city_kursk',
                'gerb '=> 'kursk-1.png',
                'glava_foto' => 'R3IfmUFk5FI-60a474d3.webp',
                'description' => 'city_kursk.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Город Рыльск',
                'type' => 'Город',
                'title' => 'Город Рыльск Курской области',
                'glava' => 'Курносов Сергей Александрович',
                'address' => '307 910, Курская область, Беловский район, сл. Белая. Советская площадь, 1',
                'phone' => '8-471-49-2-15-35',
                'site' => 'http://bel.rkursk.ru/',
                'email' => 'belay_46@mail.ru',
                'folder' => 'city_rylsk',
                'gerb '=> 'rils_r-1.gif',
                'glava_foto' => '7BQ3Lu7uELs-802ab6f7.webp',
                'description' => 'city_rylsk.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Город Льгов',
                'type' => 'Город',
                'title' => 'Город Льгов Курской области',
                'glava' => 'Клемешов Алексей Сергеевич',
                'address' => '307170, Курская обл., г. Льгов, Красная пл., 13',
                'phone' => '8-471-40-2-32-34, 2-22-14, 2-30-13',
                'site' => 'http://gorlgov.rkursk.ru/',
                'email' => 'admlgov@yandex.ru',
                'folder' => 'city_lgov',
                'gerb '=> 'lgov.png',
                'glava_foto' => 'wX_yPnMwZBw-c31c95be.webp',
                'description' => 'city_lgov.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Город Щигры',
                'type' => 'Город',
                'title' => 'Город Щигры Курской области',
                'glava' => 'Черников Сергей Анатольевич',
                'address' => '306530, Курская обл., г. Щигры, ул. Большевиков 22',
                'phone' => '8-471-45-4-42-35, 4-14-74',
                'site' => 'https://kursk.ru/region/control/page-232/?sphrase_id=578640',
                'email' => 'secretar.admshigry@rkursk.ru',
                'folder' => 'city_shchigry',
                'gerb '=> 'shigry.png',
                'glava_foto' => 'jz-jAOJGC_E-cae23364.webp',
                'description' => 'city_shchigry.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Город Курчатов',
                'type' => 'Город',
                'title' => 'Город Курчатов Курской области',
                'glava' => 'Корпунков Игорь Владимирович',
                'address' => '307251, Курская область, г.Курчатов, пр.Коммунистический, д.33',
                'phone' => '8-471-31-4-32-22, 4-16-34',
                'site' => 'https://kursk.ru/region/control/page-234/?sphrase_id=578642',
                'email' => 'city@kurchatov.info',
                'folder' => 'city_kurchatov',
                'gerb '=> 'kurchatov.png',
                'glava_foto' => 'QfqUw0UnseM-1af048cd.webp',
                'description' => 'city_kurchatov.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Беловский район',
                'type' => 'Район',
                'title' => 'Беловский район Курской области',
                'glava' => 'Волобуев Николай Викторович',
                'address' => '307910, Курская область, Беловский район, сл. Белая. Советская площадь, 1',
                'phone' => '8-471-49-2-15-35',
                'site' => 'http://bel.rkursk.ru/',
                'email' => 'belay_46@mail.ru',
                'folder' => 'belovsky_district',
                'gerb '=> 'bel_r.gif',
                'glava_foto' => 'BelovRayonGlavaPhoto.webp',
                'description' => 'belovsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2.png"
                    ],

                ],
            ],
            [
                'name' => 'Большесолдатский район',
                'type' => 'Район',
                'title' => 'Большесолдатский район Курской области',
                'glava' => 'Зайцев Владимир Петрович',
                'address' => '307850, Курская обл., Большесолдатский район, с.Большое Солдатское, ул.Мира, 1',
                'phone' => '8(471 36) 2-16-48, 2-11-26',
                'site' => 'http://bol.rkursk.ru/',
                'email' => 'admbs@kursknet.ru ',
                'folder' => 'bolshesoldatsky_district',
                'gerb '=> 'bol_r.gif',
                'glava_foto' => 'jo3jo-11a6f0bf.webp',
                'description' => 'bolshesoldatsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],
            [
                'name' => '',
                'type' => '',
                'title' => '',
                'glava' => '',
                'address' => '',
                'phone' => '',
                'site' => '',
                'email' => '',
                'folder' => '',
                'gerb '=> '',
                'glava_foto' => '',
                'description' => '',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "2-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "1-1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-5.png"
                    ],

                ],
            ],

        ];
    }
}
