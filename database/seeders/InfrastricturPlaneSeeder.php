<?php

namespace Database\Seeders;

use DiDom\Query;
use DiDom\Document;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InfrastricturPlaneSeeder extends Seeder
{

    private function get_card_data($str) {
        $year = 2023;
        $month = 1;

        if(strripos($str, "2023") !== false) $year = 2023;
        if(strripos($str, "2022") !== false) $year = 2022;
        if(strripos($str, "2021") !== false) $year = 2021;
        if(strripos($str, "2020") !== false) $year = 2020;
        if(strripos($str, "2019") !== false) $year = 2019;
        if(strripos($str, "2018") !== false) $year = 2018;

        if(strripos(mb_strtoupper($str), "ЯНВАРЬ") !== false) $month = 1;
        if(strripos(mb_strtoupper($str), "ФЕВРАЛЬ") !== false) $month = 2;
        if(strripos(mb_strtoupper($str), "МАРТ") !== false) $month = 3;
        if(strripos(mb_strtoupper($str), "АПРЕЛЬ") !== false) $month = 4;
        if(strripos(mb_strtoupper($str), "МАЙ") !== false) $month = 5;
        if(strripos(mb_strtoupper($str), "ИЮНЬ") !== false) $month = 6;
        if(strripos(mb_strtoupper($str), "ИЮЛЬ") !== false) $month = 7;
        if(strripos(mb_strtoupper($str), "АВГУСТ") !== false) $month = 8;
        if(strripos(mb_strtoupper($str), "СЕНТЯБРЬ") !== false) $month = 9;
        if(strripos(mb_strtoupper($str), "ОКТЯБРЬ") !== false) $month = 10;
        if(strripos(mb_strtoupper($str), "НОЯБРЬ") !== false) $month = 11;
        if(strripos(mb_strtoupper($str), "ДЕКАБРЬ") !== false) $month = 12;


        return [
            'title' => $str,
            'year' => $year,
            'month' => $month
        ];
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $all_report = [];
        if (!file_exists(public_path('old_data//ifrastr_planes//all_report.json'))){
            $document = new Document('https://kurskoblinvest.ru/plan-sozdaniya-obektov-infrastruktury/', true);
            $document_en = new Document('https://en.kurskoblinvest.ru/plan-sozdaniya-obektov-infrastruktury/', true);

            $cards_wrp = $document->find('//*[@id="page#5"]/div', Query::TYPE_XPATH);
            $cards_wrp_en = $document_en->find('//*[@id="page#5"]/div', Query::TYPE_XPATH);

            $cards = $cards_wrp[0]->find('.el-title.uk-h6');
            $links = $cards_wrp[0]->find('.el-link.uk-button');

            $cards_en = $cards_wrp_en[0]->find('.el-title.uk-h6');

            for ($i=0; $i<count($cards); $i++) {

                $adding_item = $this->get_card_data(trim($cards[$i]->text()));
                $adding_item['title_en'] = trim($cards_en[$i]->text());
                $adding_item['file'] = $links[$i]->attr('href');


                    if (isset($adding_item['file']) && !empty($adding_item['file'])) {
                        $info = new \SplFileInfo($adding_item['file']);

                        $fileUrl = 'https://kurskoblinvest.ru'.$adding_item['file'];
                        if(strripos(strtoupper($adding_item['file']), "HTTP") !== false)
                            $fileUrl = $adding_item['file'];

                            if (@file_get_contents($fileUrl) !== false) {
                                file_put_contents( public_path('old_data//ifrastr_planes//'.$info->getFilename()),
                                file_get_contents($fileUrl));
                            } else {
                                continue;
                            }
                        $adding_item['file'] = $info->getFilename();
                        $all_report[] = $adding_item;
                    }


            }

            file_put_contents( public_path('old_data//ifrastr_planes//all_report.json'), json_encode( $all_report ));

        } else {
            $all_report = json_decode(file_get_contents(public_path('old_data//ifrastr_planes//all_report.json')),true);
        }

        foreach ((array)$all_report as $item){
            $adding_item = $item;

            if (!empty($item['file'])) {
                Storage::disk('public')->put("ifrastr_planes/".$item['file'], file_get_contents(public_path('old_data/ifrastr_planes/'.$item['file'])), 'public');
            }

            $p_id = DB::table("infrastrictur_planes")->insertGetId(
                $adding_item
            );
        }

        var_dump($all_report);
    }
}
