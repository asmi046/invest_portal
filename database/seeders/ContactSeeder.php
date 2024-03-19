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

            $cards = $document->find('.uk-card.uk-card-small');

            foreach ($cards as $item) {
                $person = trim($item->find('.uk-h3')[0]->text());
                $dolg = trim($item->find('.el-meta.uk-text-meta')[0]->text());

                $phone = ($item->has('.el-content.uk-panel'))?trim($item->find('.el-content.uk-panel')[0]->text()):"";
                $email = ($item->has('div .el-link.uk-link-text'))?trim($item->find('div .el-link.uk-link-text')[0]->text()):"";
                $photo = ($item->has('source'))?trim($item->find('source')[0]->attr('srcset')):"";

                $photo = str_replace([" 499w", " 494w"],"",$photo);




                $adding_item = [
                    'selector' => 'Инвестиционный комитет Курской области',
                    'person' => $person,
                    'dolg' => $dolg,
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
                    'phone' => '+7(4712) 74-91-74',
                    'phone_dob' => '263',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство жилищно-коммунального хозяйства и ТЭК Курской области',
                    'person' => 'Лях Ирина Вячеславовна',
                    'phone' => '+7(4712) 51-11-21',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство жилищно-коммунального хозяйства и ТЭК Курской области',
                    'person' => 'Писарев Кирилл Александрович',
                    'phone' => '+7(4712) 70-29-08',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство цифрового развития и связи Курской области',
                    'person' => 'Медведев Евгений Владимирович',
                    'phone' => '+7(4712) 39-51-23',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство физической культуры и спорта Курской области',
                    'person' => 'Нифонтов Алексей Владимирович',
                    'phone' => '+7(4712) 51-18-65',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство образования и науки Курской области',
                    'person' => 'Шепелев Владимир Иванович',
                    'phone' => '+7(4712) 70-05-86',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство здравоохранения Курской области',
                    'person' => 'Агаркова Елена Владимировна',
                    'phone' => '+7(4712) 70-26-23',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство сельского хозяйства Курской области',
                    'person' => 'Каета Елена Анатольевна',
                    'phone' => '+7(4712) 70-28-33',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство внутренней и молодежной политики Курской области',
                    'person' => 'Ефремова Оксана Владимировна',
                    'phone' => '+7(4712) 54-04-70',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство социального обеспечения, материнства и детства Курской области',
                    'person' => 'Шевченко Руслан Эдуардович',
                    'phone' => '+7(4712) 35-49-39',
                ],
                [
                    'selector' => 'Ответственные по направлению ГЧП',
                    'organ' => 'Министерство промышленности, торговли и предпринимательства Курской области',
                    'person' => 'Ягнешко Татьяна Валерьевна',
                    'phone' => '+7(4712) 35-49-39',
                ],
            ];

            $all_item = array_merge(
                $all_item,
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
