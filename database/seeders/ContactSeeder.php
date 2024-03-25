<?php

namespace Database\Seeders;

use DiDom\Document;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_item = [];

        if (!file_exists(public_path('old_data//contacts//all_contacts.json'))){
            $document = new Document('https://kurskoblinvest.ru/kontent/investicionnaya-komanda/', true);
            $document_en = new Document('https://en.kurskoblinvest.ru/kontent/investicionnaya-komanda/', true);

            $cards = $document->find('.uk-card.uk-card-small');
            $cards_en = $document_en->find('.uk-card.uk-card-small');

            for ($i=0; $i<count($cards); $i++) {
            // foreach ($cards as $item) {
                $person = trim($cards[$i]->find('.uk-h3')[0]->text());
                $person_en = trim($cards_en[$i]->find('.uk-h3')[0]->text());
                $dolg = trim($cards[$i]->find('.el-meta.uk-text-meta')[0]->text());
                $dolg_en = trim($cards_en[$i]->find('.el-meta.uk-text-meta')[0]->text());

                $phone = ($cards[$i]->has('.el-content.uk-panel'))?trim($cards[$i]->find('.el-content.uk-panel')[0]->text()):"";
                $email = ($cards[$i]->has('div .el-link.uk-link-text'))?trim($cards[$i]->find('div .el-link.uk-link-text')[0]->text()):"";
                $photo = ($cards[$i]->has('source'))?trim($cards[$i]->find('source')[0]->attr('srcset')):"";

                $photo = str_replace([" 499w", " 494w"],"",$photo);




                $adding_item = [
                    'selector' => 'Инвестиционный комитет Курской области',
                    'person' => $person,
                    'person_en' => $person_en,
                    'dolg' => $dolg,
                    'dolg_en' => $dolg_en,
                    'phone' => $phone,
                    'email' => $email,
                ];


                if (isset($photo) && !empty($photo)) {
                    $info = new \SplFileInfo($photo);
                    file_put_contents( public_path('old_data//contacts//'.Str::slug($person).".".$info->getExtension()),
                    file_get_contents('https://kurskoblinvest.ru'.$photo));

                    $adding_item['img'] = Str::slug($person).".".$info->getExtension();
                }

                $all_item[] = $adding_item;
            }

            $gcp = [
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство транспорта и автомобильных дорог Курской области',
                    'person' => 'Власова Надежда Олеговна',
                    'organ_en' => 'Ministry of Transport and Highways of the Kursk Region',
                    'person_en' => 'Vlasova Nadezhda Olegovna',
                    'phone' => '+7(4712) 74-91-74',
                    'phone_dob' => '263',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство жилищно-коммунального хозяйства и ТЭК Курской области',
                    'person' => 'Лях Ирина Вячеславовна',
                    'organ_en' => 'Ministry of Housing and Communal Services and Fuel and Energy Complex of the Kursk Region',
                    'person_en' => 'Lyakh Irina Vyacheslavovna',
                    'phone' => '+7(4712) 51-11-21',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство жилищно-коммунального хозяйства и ТЭК Курской области',
                    'person' => 'Писарев Кирилл Александрович',
                    'organ_en' => 'Ministry of Housing and Communal Services and Fuel and Energy Complex of the Kursk Region',
                    'person_en' => 'Pisarev Kirill Alexandrovich',
                    'phone' => '+7(4712) 70-29-08',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство цифрового развития и связи Курской области',
                    'person' => 'Медведев Евгений Владимирович',
                    'organ_en' => 'Ministry of Digital Development and Communications of the Kursk Region',
                    'person_en' => 'Evgeny Vladimirovich Medvedev',
                    'phone' => '+7(4712) 39-51-23',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство физической культуры и спорта Курской области',
                    'person' => 'Нифонтов Алексей Владимирович',
                    'organ_en' => 'Ministry of Physical Culture and Sports of the Kursk Region',
                    'person_en' => 'Alexey Vladimirovich Nifontov',
                    'phone' => '+7(4712) 51-18-65',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство образования и науки Курской области',
                    'person' => 'Шепелев Владимир Иванович',
                    'organ_en' => 'Ministry of Education and Science of the Kursk Region',
                    'person_en' => 'Vladimir IvanovichShepelev',
                    'phone' => '+7(4712) 70-05-86',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство здравоохранения Курской области',
                    'person' => 'Агаркова Елена Владимировна',
                    'organ_en' => 'Ministry of Health of the Kursk Region',
                    'person_en' => 'Agarkova Elena Vladimirovna',
                    'phone' => '+7(4712) 70-26-23',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство сельского хозяйства Курской области',
                    'person' => 'Каета Елена Анатольевна',
                    'organ_en' => 'Ministry of Agriculture of the Kursk Region',
                    'person_en' => "Elena Anatolyevna's carriage",
                    'phone' => '+7(4712) 70-28-33',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство внутренней и молодежной политики Курской области',
                    'person' => 'Ефремова Оксана Владимировна',
                    'organ_en' => 'Ministry of Internal and Youth Policy of the Kursk Region',
                    'person_en' => 'Efremova Oksana Vladimirovna',
                    'phone' => '+7(4712) 54-04-70',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство социального обеспечения, материнства и детства Курской области',
                    'person' => 'Шевченко Руслан Эдуардович',
                    'organ_en' => 'Ministry of Social Security, Motherhood and Childhood of the Kursk Region',
                    'person_en' => 'Shevchenko Ruslan Eduardovich',
                    'phone' => '+7(4712) 35-49-39',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство промышленности, торговли и предпринимательства Курской области',
                    'person' => 'Ягнешко Татьяна Валерьевна',
                    'organ_en' => 'Ministry of Industry, Trade and Entrepreneurship of the Kursk Region',
                    'person_en' => 'Yagneshko Tatyana Valeryevna',
                    'phone' => '+7(4712) 35-49-39',
                ],
            ];


            $export_contacts = [
                [
                    'selector' => 'Поддержка экспортеров',
                    'organ' => 'Российский экспортный центр',
                    'organ_en' => 'Russian Expert Center',
                    'phone' => '+7 (495) 937-4747',
                    'email' => 'info@exportcenter.ru',
                    'adres' => '123610, Россия, г. Москва, Краснопресненская набережная, дом 12, подъезд 9',
                    'adres_en' => '123610, Russia, Moscow, Krasnopresnenskaya embankment, building 12, entrance 9',
                    'img' => 'r_ex_c.webp'
                ],
                [
                    'selector' => 'Поддержка экспортеров',
                    'organ' => 'Мой бизнес - продвижение на экспорт Курской Области',
                    'organ_en' => 'My business is the export promotion of the Kursk Region',
                    'phone' => '+7 (4712) 70-33-77',
                    'email' => 'info@cpp46.ru',
                    'adres' => '305000, г. Курск, ул. Горького, д. 34',
                    'adres_en' => '34 Gorky Street, Kursk, 305000',
                    'img' => 'mb_ex_ko.webp'
                ],
                [
                    'selector' => 'Поддержка экспортеров',
                    'organ' => 'Для просмотра аналитического портала «Экспорт регионов России», необходима регистрация на сайте АО «РЭЦ»',
                    'organ_en' => 'To view the analytical portal "Export of Russian regions", registration is required on the website of JSC REC',
                    'phone' => '8-800-550-0188',
                    'web' => 'https://www.exportcenter.ru/',
                    'img' => 'export_regions.webp'
                ],
                [
                    'selector' => 'Поддержка экспортеров',
                    'organ' => '«Мой экспорт»  – онлайн доступ к государственным и бизнес сервисам, сопровождающим выход компаний на экспорт, в режиме «Одно окно»',
                    'organ_en' => '"My Export" – online access to government and business services that accompany companies export, in the "One window" mode',
                    'phone' => '8-800-550-0188',
                    'web' => 'https://myexport.exportcenter.ru/exporter/?utm_medium=banner&utm_campaign=regions',
                    'img' => 'm_export.webp'
                ],
            ];

            $main_contacts = [
                [
                    'selector' => 'Основные контакты',
                    'text_id' => 'korp_razv',
                    'organ' => 'ООО Корпорация развития Курской Области',
                    'organ_en' => 'Kursk Region Development Corporation LLC',
                    'adres' => '305000 Курская область, г. Курск, ул. Димитрова, д. 59',
                    'adres_en' => '305000 Kursk region, Kursk, Dimitrova str., 59',
                    'phone' => '+7 (4712) 70-70-47',
                    'img' => 'korp_razv_logo.webp',
                    'email' => 'info@kursk.in',
                ],
                [
                    'selector' => 'Основные контакты',
                    'text_id' => 'min_ec',
                    'organ' => 'Министерство экономического развития Курской области',
                    'organ_en' => 'Ministry of Economic Development of the Kursk region',
                    'adres' => '305007 Курская область, г. Курск, ул. Моковская, д. 11а',
                    'adres_en' => '305007 Kursk region, Kursk, Mokovskaya str., 11a',
                    'phone' => '+7 (4712) 33-07-50',
                    'phone_dob' => '106',
                    'img' => 'min_ex.webp',
                    'email' => 'komitet46ec@yandex.ru',
                    'vk_lnk' => 'https://vk.com/komeconom46',
                    'tg_lnk' => 'https://t.me/econom46',
                    'ok_lnk' => 'https://ok.ru/group/63739634778364',
                ],

            ];

            $all_item = array_merge(
                $main_contacts,
                $all_item,
                $export_contacts,
                $gcp
            );

            file_put_contents( public_path('old_data//contacts//all_contacts.json'), json_encode( $all_item ));

        } else {
            $all_item = json_decode(file_get_contents(public_path('old_data//contacts//all_contacts.json')),true);
        }


        foreach ((array)$all_item as $item){
            $adding_item = $item;

            if (!empty($item['img'])) {
                Storage::disk('public')->put("contacts/".$item['img'], file_get_contents(public_path('old_data/contacts/'.$item['img'])), 'public');
            }

            $p_id = DB::table("contacts")->insertGetId(
                $adding_item
            );
        }

        var_dump($all_item);

    }
}
