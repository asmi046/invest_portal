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
                'name' => "Город Курск",
                'type' => "Город",
                'title' => "Город Курск Курской области",
                'glava' => "Куцак Игорь Вячеславович",
                'address' => "305000, Курская область, г. Курск, ул. Ленина, 1",
                'phone' => "8 (4712) 55-47-01",
                'site' => "https://www.kurskadmin.ru",
                'email' => "gorod@kurskadmin.ru",
                'folder' => "city_kursk",
                'gerb '=> "kursk-1.png",
                'glava_photo' => "R3IfmUFk5FI-60a474d3.webp",
                'description' => "city_kursk.html",
                'passport_files' => "",
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
                'glava_photo' => '7BQ3Lu7uELs-802ab6f7.webp',
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
                'glava_photo' => 'wX_yPnMwZBw-c31c95be.webp',
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
                'glava_photo' => 'jz-jAOJGC_E-cae23364.webp',
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
                'glava_photo' => 'QfqUw0UnseM-1af048cd.webp',
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
                'glava_photo' => 'BelovRayonGlavaPhoto.webp',
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
                'glava_photo' => 'jo3jo-11a6f0bf.webp',
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
                'name' => 'Глушковский район',
                'type' => 'Район',
                'title' => 'Глушковский район Курской области',
                'glava' => 'Золотарев Павел Михайлович',
                'address' => '307450, Курская область, Глушковский район, пос. Глушково, ул. Советская д.3',
                'phone' => '8 (471-32) 2-12-01',
                'site' => 'http://glush.rkursk.ru/',
                'email' => 'agrko@mail.ru',
                'folder' => 'glushkovsky_district',
                'gerb '=> 'gl_r.gif',
                'glava_photo' => 'Zolotorev-1a0c3133.webp',
                'description' => 'glushkovsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-4.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-3.png"
                    ],

                ],
            ],
            [
                'name' => 'Горшеченский район',
                'type' => 'Район',
                'title' => 'Горшеченский район Курской области',
                'glava' => 'Амерев Андрей Михайлович',
                'address' => '306800, Курская обл., Горшеченский р-н, р.п.Горшечное, улица Кирова д.28',
                'phone' => '8-471-33-2-16-43, 2-30-15',
                'site' => 'http://gorshechr.rkursk.ru',
                'email' => 'gorshechnoe@reg-kursk.ru',
                'folder' => 'gorshechensky_district',
                'gerb '=> 'gor_r.gif',
                'glava_photo' => 'Amerev-Andrej-0e774174.webp',
                'description' => 'gorshechensky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "1-1-4.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "2-7.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-7.png"
                    ],

                ],
            ],
            [
                'name' => 'Дмитриевский район',
                'type' => 'Район',
                'title' => 'Дмитриевский район Курской области',
                'glava' => 'Петров Виктор Григорьевич',
                'address' => '307910, Курская область, Дмитриевский район, г.Дмитриев, ул.Ленина, д.44',
                'phone' => '8-471-49-2-15-35',
                'site' => 'http://dmitriev.rkursk.ru/ ',
                'email' => '',
                'folder' => 'dmitrievsky_district',
                'gerb '=> '2eb3d9d930db4f70cb314e32d0b186d4.jpg',
                'glava_photo' => 'Petrov-Viktor-04ea593a.webp',
                'description' => 'dmitrievsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "a.png.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "b.png.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "c.png.png"
                    ],

                ],
            ],
            [
                'name' => 'Железногорский район',
                'type' => 'Район',
                'title' => 'Железногорский район Курской области',
                'glava' => 'Фролков Александр Дмитриевич',
                'address' => '307170, Курская область, г.Железногорск, ул. Ленина,52',
                'phone' => '8-471-482-12-38, 4-16-33',
                'site' => 'http://zhel.rkursk.ru/',
                'email' => 'zhelrayon@mail.ru',
                'folder' => 'zheleznogorsk_district',
                'gerb '=> 'Gerb-rayona-240x300.png',
                'glava_photo' => '123-1-b137399b.webp',
                'description' => 'zheleznogorsk.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-5.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-4.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-4.png"
                    ],

                ],
            ],
            [
                'name' => 'Золотухинский район',
                'type' => 'Район',
                'title' => 'Золотухинский район Курской области',
                'glava' => 'Кожухов Виктор Николаевич',
                'address' => '306020, Курская обл., Золотухинский р-н, р.п.Золотухино, ул. Ленина, 18',
                'phone' => '8-471-51-2-11-58, 2-15-35',
                'site' => 'https://администрация-золотухино.рф/',
                'email' => '46zolotuhino@mail.ru',
                'folder' => 'zolotukhinsky_district',
                'gerb '=> 'zol_r.gif',
                'glava_photo' => 'Kozhuhov-99d8585c.webp',
                'description' => 'zolotukhinsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "1-7.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "2-8.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-8.png"
                    ],

                ],
            ],
            [
                'name' => 'Касторенский район',
                'type' => 'Район',
                'title' => 'Касторенский район Курской области',
                'glava' => 'Голубева Нина Юрьевна',
                'address' => '306700, Курская область, Касторенский район, п.Касторное, ул.50 Лет Октября 6',
                'phone' => '8-471-57-2-14-97, 2-15-35',
                'site' => 'http://kastor.reg-kursk.ru/',
                'email' => 'adm.kastornoe46@rkursk.ru',
                'folder' => 'kastoreni_district',
                'gerb '=> 'kas_r.gif',
                'glava_photo' => 'Golubeva-dd2c4752.webp',
                'description' => 'kastoreni.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-8.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-7.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-7.png"
                    ],

                ],
            ],
            [
                'name' => 'Конышевский район',
                'type' => 'Район',
                'title' => 'Конышевский район Курской области',
                'glava' => 'Новиков Дмитрий Александрович',
                'address' => '307620, Курская обл., Конышевский р-н,п.Конышевка, ул. Ленина, д. 19',
                'phone' => '8-471-56-2-12-55, 2-12-68',
                'site' => 'http://konishovskiyr.rkursk.ru/',
                'email' => 'konadmin@mail.ru',
                'folder' => 'konyshevsky_district',
                'gerb '=> 'kon_r.gif',
                'glava_photo' => 'Novikov-f9478a79.webp',
                'description' => 'konyshevsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "1-8.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "2-9.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "3-9.png"
                    ],

                ],
            ],
            [
                'name' => 'Кореневский район',
                'type' => 'Район',
                'title' => 'Кореневский район Курской области',
                'glava' => 'Дегтярева Марина Вячеславовна',
                'address' => '307410, Курская обл., Кореневский р-н, р.п.Коренево, ул.Школьная, 11',
                'phone' => '8-471-47-2-18-05',
                'site' => 'http://kor.rkursk.ru/',
                'email' => 'admin-korenevo@mail.ru',
                'folder' => 'korenevsky_district',
                'gerb '=> 'kor_r.gif',
                'glava_photo' => 'asg-6748fa70.webp',
                'description' => 'korenevsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-5.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-5.png"
                    ],

                ],
            ],
            [
                'name' => 'Курский район',
                'type' => 'Район',
                'title' => 'Курский район Курской области',
                'glava' => 'Телегин Андрей Владимирович',
                'address' => '305001, г.Курск, ул.Белинского, 21',
                'phone' => '8-4712-54-89-41',
                'site' => 'http://kurskr.rkursk.ru',
                'email' => 'admkursk.rn-info@mail.ru',
                'folder' => 'kursk_district',
                'gerb '=> 'Gerb-300x234.jpg',
                'glava_photo' => 'admin-ajax.webp',
                'description' => 'kursk.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-7.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-6.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-6.png"
                    ],

                ],
            ],
            [
                'name' => 'Курчатовский район',
                'type' => 'Район',
                'title' => 'Курчатовский район Курской области',
                'glava' => 'Ярыгин Александр Владимирович',
                'address' => '307251, Курская обл., г.Курчатов, пр-т Коммунистический',
                'phone' => '8-471-31-4-33-87, 4-12-81',
                'site' => 'https://курчатовский-район.рф/',
                'email' => 'rayadmin@mail.ru',
                'folder' => 'kurchatovsky_district',
                'gerb '=> 'kurch_r.gif',
                'glava_photo' => 'Yarygin-15bbc4c0.webp',
                'description' => 'kurchatovsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-10.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-9.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-8.png"
                    ],

                ],
            ],
            [
                'name' => 'Льговский район',
                'type' => 'Район',
                'title' => 'Льговский район Курской области',
                'glava' => 'Коростылев Сергей Николаевич',
                'address' => '307300, Курская обл., г. Льгов, Красная площадь',
                'phone' => '8-471-40-2-30-77',
                'site' => 'https://rlgov.ru/',
                'email' => 'lgovyap@rambler.ru',
                'folder' => 'lgovsky_district',
                'gerb '=> 'l_r.gif',
                'glava_photo' => 'Korystylev-1fd1eb31.webp',
                'description' => 'lgovsky.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Мантуровский район',
                'type' => 'Район',
                'title' => 'Мантуровский район Курской области',
                'glava' => 'Бочаров Сергей Николаевич',
                'address' => '307000, Курская обл., с. Мантурово, ул. Ленина, 13',
                'phone' => '8-471-55-2-14-34, 2-16-76',
                'site' => 'http://man.rkursk.ru/',
                'email' => 'manturovo1710@mail.ru',
                'folder' => 'manturovo_district',
                'gerb '=> 'man_r.gif',
                'glava_photo' => 'Bocharov-45b0586f.webp',
                'description' => 'manturovo.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "manturovo1-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "manturovo1-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "manturovo1-3.png"
                    ],

                ],
            ],
            [
                'name' => 'Медвенский район',
                'type' => 'Район',
                'title' => 'Медвенский район Курской области',
                'glava' => 'Катунин Виктор Владимирович',
                'address' => '307030, Курская обл., Медвенский р-н, п. Медвенка, ул. Советская, 20',
                'phone' => '8-471-46-4-12-27',
                'site' => 'http://medvenka46.ru',
                'email' => 'medwenka@rkursk.ru',
                'folder' => 'medvensky_district',
                'gerb '=> 'gerb-1-240x300.jpg',
                'glava_photo' => 'Katunin-4da9de5d.webp',
                'description' => 'medvensky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Medvenka.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Medvenka-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Medvenka-3-1.png"
                    ],

                ],
            ],
            [
                'name' => 'Обоянский район',
                'type' => 'Район',
                'title' => 'Обоянский район Курской области',
                'glava' => 'Жилин Виталий Николаевич',
                'address' => '306230, Курская область, г.Обоянь, ул.Шмидта, 6',
                'phone' => '8-471-41-2-24-44, 8-471-41-2-15-35',
                'site' => 'http://oboyan.rkursk.ru/',
                'email' => 'oboyanraion@yandex.ru',
                'folder' => 'oboyansky_district',
                'gerb '=> 'Oboyan.gif',
                'glava_photo' => 'Zhilin-34a24508.webp',
                'description' => 'oboyansky.html',
                'passport_files' => "",
            ],
            [
                'name' => 'Октябрьский район',
                'type' => 'Район',
                'title' => 'Октябрьский район Курской области',
                'glava' => 'Быковский Олег Анатольевич',
                'address' => '307200, Курская обл., Октябрьский р-н, п.Прямицыно,ул.Октябрьская,134',
                'phone' => '8-471-42-2-13-36',
                'site' => 'admokt.gosuslugi.ru',
                'email' => 'admokt@list.ru',
                'folder' => 'oktyabrsky_district',
                'gerb '=> 'okt_kur.gif',
                'glava_photo' => 'IuwIEeNYt4w-790db106.webp',
                'description' => 'oktyabrsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-12.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-11.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-10.png"
                    ],

                ],
            ],
            [
                'name' => 'Поныровский район',
                'type' => 'Район',
                'title' => 'Поныровский район Курской области',
                'glava' => 'Торубаров Владимир Сергеевич',
                'address' => '306000, Курская обл., Поныровский р-н, р.п.Поныри',
                'phone' => '8-471-35-2-15-35, 2-11-58',
                'site' => 'http://ponirir.rkursk.ru/',
                'email' => 'admponyri@mail.ru',
                'folder' => 'ponyrovsky_district',
                'gerb '=> 'pon_r.gif',
                'glava_photo' => 'Torubarov-dc229ed8.webp',
                'description' => 'ponyrovsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Ponyri.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Ponyri-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Ponyri-3.png"
                    ],

                ],
            ],
            [
                'name' => 'Пристенский район',
                'type' => 'Район',
                'title' => 'Пристенский район Курской области',
                'glava' => 'Петров Виктор Владимирович',
                'address' => '306200, Курская обл., Пристенский р-н, р.п.Пристень, ул.Ленина, 1',
                'phone' => '8-471-34-2-15-35, 2-14-97',
                'site' => 'http://pristen.rkursk.ru/',
                'email' => 'Pristen_adm@mail.ru',
                'folder' => 'pristensky_district',
                'gerb '=> 'Pristen.gif',
                'glava_photo' => 'Petrov-2c7f8959.webp',
                'description' => 'pristensky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "pristen.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "pristen-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "pristen-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-4",
                        'description' => "",
                        'file' => "pristen-4.png"
                    ],

                ],
            ],
            [
                'name' => 'Рыльский район',
                'type' => 'Район',
                'title' => 'Рыльский район Курской области',
                'glava' => 'Лисман Андрей Владимирович',
                'address' => '307370, Курская обл., г. Рыльск, ул. К. Либкнехта, 21',
                'phone' => '8-471-52-2-12-60',
                'site' => 'https://www.rylskraion.ru/',
                'email' => 'glava@rylskraion.ru',
                'folder' => 'rylsky_district',
                'gerb '=> 'rils_r.gif',
                'glava_photo' => 'RylskRayonGlava.webp',
                'description' => 'rylsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Rylsk-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Rylsk-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Rylsk-3.png"
                    ],

                ],
            ],
            [
                'name' => 'Советский район',
                'type' => 'Район',
                'title' => 'Советский район Курской области',
                'glava' => 'Жилинков Владимир Михайлович',
                'address' => '306600, Курская обл., Советский р-н, р.п.Кшенский',
                'phone' => '8-471-58-2-15-35, 2-14-97',
                'site' => 'http://sovetskiyr.rkursk.ru/',
                'email' => 'sovr.priemnaya@rkursk.ru',
                'folder' => 'sovetsky_district',
                'gerb '=> 'sov_r.gif',
                'glava_photo' => 'Zhilinkov-ddfb261c.webp',
                'description' => 'sovetsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Sovetskij-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Sovetskij-2.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Sovetskij-3.png"
                    ],
                    [
                        'title' => "Паспорт МО-4",
                        'description' => "",
                        'file' => "Sovetskij-4.png"
                    ],

                ],
            ],
            [
                'name' => 'Солнцевский район',
                'type' => 'Район',
                'title' => 'Солнцевский район Курской области',
                'glava' => 'Енютин Геннадий Дмитриевич',
                'address' => '306120, Курская обл., Солнцевский р-н, р.п.Солнцево, ул.Ленина, 44',
                'phone' => '8-471-54-2-22-36',
                'site' => 'http://solnr.rkursk.ru/',
                'email' => 'adm4622@bk.ru',
                'folder' => 'solntsevsky_district',
                'gerb '=> 'Solncevo.gif',
                'glava_photo' => 'Enjutin-f00c54ae.webp',
                'description' => 'solntsevsky.html',
                'passport_files' => '',
            ],
            [
                'name' => 'Суджанский район',
                'type' => 'Район',
                'title' => 'Суджанский район Курской области',
                'glava' => 'Богачёв Александр Михайлович',
                'address' => '307800, Курская обл., г. Суджа, ул. Ленина, 3',
                'phone' => '8-471-43-2-15-35, 2-14-97',
                'site' => 'https://суджанский-район.рф/',
                'email' => 'admsudga@yandex.ru',
                'folder' => 'sudzhansky_district',
                'gerb '=> 'Sudzhanskij.gif',
                'glava_photo' => 'ltiIO1VW-W-nwaNuT-c2cXczUZ-7yd-wEDFV3plhDKCT_V6Q6abLy5ktwRZhzm1sfo8JHpXmZvobb39b6uRXubIm-9918c6d2.webp',
                'description' => 'sudzhansky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-13.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-12.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-11.png"
                    ],

                ],
            ],
            [
                'name' => 'Тимский район',
                'type' => 'Район',
                'title' => 'Тимский район Курской области',
                'glava' => 'Булгаков Александр Иванович',
                'address' => '307060, Курская обл., Тимский р-н, р.п.Тим, ул.Кирова',
                'phone' => '8-471-53-2-18-00, 2-34-90',
                'site' => 'http://timr.rkursk.ru/',
                'email' => 'secretar.admtim@rkursk.ru',
                'folder' => 'timsky_district',
                'gerb '=> 'tim_r.gif',
                'glava_photo' => 'lBdr5QYNqSQ-dc9f45dd.webp',
                'description' => 'timsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-11.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_1-10.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-9.png"
                    ],
                ],
            ],
            [
                'name' => 'Фатежский район',
                'type' => 'Район',
                'title' => 'Фатежский район Курской области',
                'glava' => 'Гнездилов Сергей Егорович',
                'address' => '307400, Курская обл., г. Фатеж, ул. К. Маркса',
                'phone' => '8-471-34-2-15-35, 2-14-97',
                'site' => 'https://fatezh-adm.ru/',
                'email' => 'fatejadmr-na@mail.ru',
                'folder' => 'fatezhsky_district',
                'gerb '=> 'fat_r.gif',
                'glava_photo' => 'BToZxQMCo0A-31cdff36.webp',
                'description' => 'fatezhsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_0-14.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_2-12.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Digital-Marketing-Specialist-Grey-Simple-_3.png"
                    ],

                ],
            ],
            [
                'name' => 'Хомутовский район',
                'type' => 'Район',
                'title' => 'Хомутовский район Курской области',
                'glava' => 'Хрулев Юрий Васильевич',
                'address' => '307540, Кур.обл., Хомутовский р-н, р.п.Хомутовка',
                'phone' => '8-471-37-2-15-35, 2-13-97',
                'site' => 'http://хомутовский-район.рф',
                'email' => 'secretar.hom@rkursk.ru',
                'folder' => 'khomutovsky_district',
                'gerb '=> 'xom_r.gif',
                'glava_photo' => 'CfRLGKlD7Ew-fba664d4.webp',
                'description' => 'khomutovsky.html',
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_0.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_1.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_2.png"
                    ],

                ],
            ],
            [
                'name' => 'Черемисиновский район',
                'type' => 'Район',
                'title' => 'Черемисиновский район Курской области',
                'glava' => 'Игнатов Михаил Николаевич',
                'address' => '306440, Курская обл., Черемис. р-н, р.п.Черемисиново',
                'phone' => '8-471-59-2-12-01, 2-14-90',
                'site' => 'http://cher.rkursk.ru/',
                'email' => 'cheradm@mail.ru',
                'folder' => 'cheremisinovsky_district',
                'gerb '=> 'cher_r.gif',
                'glava_photo' => 'LmoA92lhkuQ-c9952629.webp',
                'description' => 'cheremisinovsky.html',
                'passport_files' => "",
            ],
            [
                'name' => "Щигровский район",
                'type' => "Район",
                'title' => "Щигровский район Курской области",
                'glava' => "Астахов Юрий Иванович",
                'address' => "306530, Курская обл., г. Щигры, ул.Октябрьская, 35",
                'phone' => "8 (47145) 4-12-12, 4-16-38",
                'site' => "http://shigry.rkursk.ru/index.php?mun_obr=517&sub_menus_id=1057",
                'email' => "badmshig@yandex.ru",
                'folder' => "shchigrovsky_district",
                'gerb '=> "28.gif",
                'glava_photo' => "mIyjP7roUlc-741d0b13.webp",
                'description' => "shchigrovsky.html",
                'passport_files' => [
                    [
                        'title' => "Паспорт МО-1",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_0-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-2",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_1-1.png"
                    ],
                    [
                        'title' => "Паспорт МО-3",
                        'description' => "",
                        'file' => "Rezjume-rajonov-2_2-1.png"
                    ],

                ],
            ],

        ];
    }
}
