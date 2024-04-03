<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_area = [
            [
                'name' => 'Земельный участок № 1',
                'name_en' => 'Land plot No. 1',
                'dir' => 'areas_1',
                'cadastral' => '46:01:100601',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-01-100601',
                'img' => '2023-05-11_14-33-16-9b6e6865.webp'
            ],
            [
                'name' => 'Земельный участок № 2',
                'name_en' => 'Land plot No. 2',
                'dir' => 'areas_2',
                'cadastral' => '46:01:110501',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-01-110501',
                'img' => '2023-05-12_11-56-13-5b71f60f.webp'
            ],
            [
                'name' => 'Земельный участок № 3',
                'name_en' => 'Land plot No. 3',
                'dir' => 'areas_3',
                'cadastral' => '46:04:020607',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-020607',
                'img' => '2023-05-12_16-13-47-fcbae9cf.webp'
            ],
            [
                'name' => 'Земельный участок № 4',
                'name_en' => 'Land plot No. 4',
                'dir' => 'areas_4',
                'cadastral' => '46:04:151201',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-151201',
                'img' => '2023-05-12_16-19-50-8bfc8d2b.webp'
            ],
            [
                'name' => 'Земельный участок № 5',
                'name_en' => 'Land plot No. 5',
                'dir' => 'areas_5',
                'cadastral' => '46:04:050305',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-050305',
                'img' => '2023-05-12_16-22-50-c2081332.webp'
            ],
            [
                'name' => 'Земельный участок № 6',
                'name_en' => 'Land plot No. 6',
                'dir' => 'areas_6',
                'cadastral' => '46:04:120301',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-120301',
                'img' => '2023-05-12_16-25-24-7d8c6903.webp'
            ],
            [
                'name' => 'Земельный участок № 7',
                'name_en' => 'Land plot No. 7',
                'dir' => 'areas_7',
                'cadastral' => '46:04:130405',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-130405',
                'img' => '2023-05-12_16-27-51-accb23d2.webp'
            ],
            [
                'name' => 'Земельный участок № 8',
                'name_en' => 'Land plot No. 8',
                'dir' => 'areas_8',
                'cadastral' => '46:04:090302',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-090302',
                'img' => '2023-05-12_16-50-38-1a9c0e30.webp'
            ],
            [
                'name' => 'Земельный участок № 9',
                'name_en' => 'Land plot No. 9',
                'dir' => 'areas_9',
                'cadastral' => '46:05:090802:1',
                'lnk' => 'https://kartagov.com/karta/46-05-090802-1',
                'img' => '2023-05-12_16-53-00-d1862b9e.webp'
            ],
            [
                'name' => 'Земельный участок № 10',
                'name_en' => 'Land plot No. 10',
                'dir' => 'areas_10',
                'cadastral' => '46:05:000000:842',
                'lnk' => 'https://kartagov.com/karta/46-05-000000-842',
                'img' => '2023-05-12_16-56-38-980b0b61.webp'
            ],
            [
                'name' => 'Земельный участок № 11',
                'name_en' => 'Land plot No. 11',
                'dir' => 'areas_11',
                'cadastral' => '46:05:000000:550',
                'lnk' => 'https://kartagov.com/karta/46-05-000000-842',
                'img' => '2023-05-12_16-56-38-980b0b61 (1).webp'
            ],
            [
                'name' => 'Земельный участок № 12',
                'name_en' => 'Land plot No. 12',
                'dir' => 'areas_12',
                'cadastral' => '46:30:000007',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-30-000007',
                'img' => '2023-05-12_17-40-33-e100a1d4.webp'
            ],
            [
                'name' => 'Земельный участок № 13',
                'name_en' => 'Land plot No. 13',
                'dir' => 'areas_13',
                'cadastral' => '46:30:000007',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-30-000007',
                'img' => '2023-05-12_17-40-33-e100a1d4.webp'
            ],
            [
                'name' => 'Земельный участок № 14',
                'name_en' => 'Land plot No. 14',
                'dir' => 'areas_14',
                'cadastral' => '46:30:000004:553',
                'lnk' => 'https://kartagov.com/karta/46-30-000004-553',
                'img' => '2023-05-12_17-46-30-7f3d7a8b.webp'
            ],
            [
                'name' => 'Земельный участок № 15',
                'name_en' => 'Land plot No. 15',
                'dir' => 'areas_15',
                'cadastral' => '46:30:000004:553',
                'lnk' => 'https://kartagov.com/karta/46-30-000028-3341',
                'img' => '2023-05-12_17-57-20-3ba69d48.webp'
            ],
            [
                'name' => 'Земельный участок № 16',
                'name_en' => 'Land plot No. 16',
                'dir' => 'areas_16',
                'cadastral' => '46:06:000000:141',
                'lnk' => 'https://kartagov.com/karta/46-06-000000-141',
                'img' => '2023-05-15_11-56-54-2b548a01.webp'
            ],
            [
                'name' => 'Земельный участок № 17',
                'name_en' => 'Land plot No. 17',
                'dir' => 'areas_17',
                'cadastral' => '46:06:011701',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-06-011701',
                'img' => '2023-05-15_12-01-06-b8fd1f35.webp'
            ],
            [
                'name' => 'Земельный участок № 18',
                'name_en' => 'Land plot No. 18',
                'dir' => 'areas_18',
                'cadastral' => 'Нет',
                'lnk' => 'https://kartagov.com/karta/46-30-000050-1711',
                'img' => '2023-06-20_17-36-45-233cd539.webp'
            ],
            [
                'name' => 'Земельный участок № 19',
                'name_en' => 'Land plot No. 19',
                'dir' => 'areas_19',
                'cadastral' => 'Нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 20',
                'name_en' => 'Land plot No. 20',
                'dir' => 'areas_20',
                'cadastral' => '46:07:140703',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-07-140703',
                'img' => '2023-05-15_12-09-34-f58b5cf0.webp'
            ],
            [
                'name' => 'Земельный участок № 21',
                'name_en' => 'Land plot No. 21',
                'dir' => 'areas_21',
                'cadastral' => '46:07:170101',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-07-170101',
                'img' => '2023-05-15_12-12-58-d0d329da.webp'
            ],
            [
                'name' => 'Земельный участок № 22',
                'name_en' => 'Land plot No. 22',
                'dir' => 'areas_22',
                'cadastral' => '46:07:010104:1740',
                'lnk' => '',
                'img' => '2023-05-15_12-18-45-738e434d.webp'
            ],
            [
                'name' => 'Земельный участок № 23',
                'name_en' => 'Land plot No. 23',
                'dir' => 'areas_23',
                'cadastral' => '46:07:010102:1317',
                'lnk' => 'https://kartagov.com/karta/46-07-010102-1317',
                'img' => '2023-05-15_12-22-01-6520d697.webp'
            ],
            [
                'name' => 'Земельный участок № 24',
                'name_en' => 'Land plot No. 24',
                'dir' => 'areas_24',
                'cadastral' => '46:09:010110:34',
                'lnk' => 'https://kartagov.com/karta/46-09-010110-34',
                'img' => '2023-05-15_15-04-25-381f5f70.webp'
            ],
            [
                'name' => 'Земельный участок № 25',
                'name_en' => 'Land plot No. 25',
                'dir' => 'areas_25',
                'cadastral' => '46:09:010139:16',
                'lnk' => 'https://kartagov.com/karta/46-09-010139-16',
                'img' => '2023-05-15_15-07-32-00b66e26.webp'
            ],
            [
                'name' => 'Земельный участок № 26',
                'name_en' => 'Land plot No. 26',
                'dir' => 'areas_26',
                'cadastral' => '46:09:090007:2 46:09:090007:3',
                'lnk' => 'https://kartagov.com/karta/46-09-090007-2',
                'img' => '2023-05-15_15-22-45-16117579.webp'
            ],
            [
                'name' => 'Земельный участок № 27',
                'name_en' => 'Land plot No. 27',
                'dir' => 'areas_27',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 28',
                'name_en' => 'Land plot No. 28',
                'dir' => 'areas_28',
                'cadastral' => '46:08:020101:6',
                'lnk' => 'https://kartagov.com/karta/46-08-020101-6',
                'img' => '2023-05-15_15-28-30-36b05e51.webp'
            ],
            [
                'name' => 'Земельный участок № 29',
                'name_en' => 'Land plot No. 29',
                'dir' => 'areas_29',
                'cadastral' => '46:12:060110:7',
                'lnk' => 'https://kartagov.com/karta/46-12-060110-7',
                'img' => '2023-05-15_15-34-19-492cf20e.webp'
            ],
            [
                'name' => 'Земельный участок № 30',
                'name_en' => 'Land plot No. 30',
                'dir' => 'areas_30',
                'cadastral' => '46:12:060110:38',
                'lnk' => 'https://kartagov.com/karta/46-12-060110-38',
                'img' => '2023-05-15_15-37-01-b8c0d244.webp'
            ],
            [
                'name' => 'Земельный участок № 31',
                'name_en' => 'Land plot No. 31',
                'dir' => 'areas_31',
                'cadastral' => '46:12:060110:38',
                'lnk' => 'https://kartagov.com/karta/46-12-060110-268',
                'img' => '2023-05-15_15-39-17-fe7d0171.webp'
            ],
            [
                'name' => 'Земельный участок № 32',
                'name_en' => 'Land plot No. 32',
                'dir' => 'areas_32',
                'cadastral' => '46:12:100102',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-12-100102',
                'img' => '2023-05-15_15-43-59-f6c6aed0.webp'
            ],
            [
                'name' => 'Земельный участок № 33',
                'name_en' => 'Land plot No. 33',
                'dir' => 'areas_33',
                'cadastral' => '46:13:140604',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-13-140604',
                'img' => '2023-05-15_15-52-44-37ee2417.webp'
            ],
            [
                'name' => 'Земельный участок № 34',
                'name_en' => 'Land plot No. 34',
                'dir' => 'areas_34',
                'cadastral' => '46:13:050000',
                'lnk' => 'https://kartagov.com/karta/46-20-270208-329',
                'img' => '2023-05-15_16-20-56-94a18ad1.webp'
            ],
            [
                'name' => 'Земельный участок № 35',
                'name_en' => 'Land plot No. 35',
                'dir' => 'areas_35',
                'cadastral' => '46:13:120707',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-13-120707',
                'img' => '2023-05-15_16-24-04-991d10f0.webp'
            ],
            [
                'name' => 'Земельный участок № 36',
                'name_en' => 'Land plot No. 36',
                'dir' => 'areas_36',
                'cadastral' => '46:20:201303:3',
                'lnk' => 'https://kartagov.com/karta/46-20-201303-3',
                'img' => '2023-05-15_16-37-31-799f00c5.webp'
            ],
            [
                'name' => 'Земельный участок № 37',
                'name_en' => 'Land plot No. 37',
                'dir' => 'areas_37',
                'cadastral' => '46:21:051411:104',
                'lnk' => 'https://kartagov.com/karta/46-21-051411-104',
                'img' => '2023-05-15_16-40-26-c2bdb34f.webp'
            ],
            [
                'name' => 'Земельный участок № 38',
                'name_en' => 'Land plot No. 38',
                'dir' => 'areas_38',
                'cadastral' => '46:15:030704',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-15-030704',
                'img' => '2023-05-15_16-43-16-37aeb847.webp'
            ],
            [
                'name' => 'Земельный участок № 39',
                'name_en' => 'Land plot No. 39',
                'dir' => 'areas_39',
                'cadastral' => '46:15:010106:893',
                'lnk' => 'https://kartagov.com/karta/46-15-010106-893',
                'img' => '2023-05-15_16-45-34-62322781.webp'
            ],
            [
                'name' => 'Земельный участок № 40',
                'name_en' => 'Land plot No. 40',
                'dir' => 'areas_40',
                'cadastral' => '46:16:190803:72',
                'lnk' => 'https://kartagov.com/karta/46-16-190803-72',
                'img' => '2023-05-15_16-48-42-5a6bc0f0.webp'
            ],
            [
                'name' => 'Земельный участок № 41',
                'name_en' => 'Land plot No. 41',
                'dir' => 'areas_41',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 42',
                'name_en' => 'Land plot No. 42',
                'dir' => 'areas_42',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 43',
                'name_en' => 'Land plot No. 43',
                'dir' => 'areas_43',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 44',
                'name_en' => 'Land plot No. 44',
                'dir' => 'areas_44',
                'cadastral' => '46:18:090803:62',
                'lnk' => 'https://kartagov.com/karta/46-18-090803-62',
                'img' => '2023-05-16_09-57-33-0df6d8e7.webp'
            ],
            [
                'name' => 'Земельный участок № 45',
                'name_en' => 'Land plot No. 45',
                'dir' => 'areas_45',
                'cadastral' => '46:18:010101:1191',
                'lnk' => 'https://kartagov.com/karta/46-18-010101-1191',
                'img' => '2023-05-16_10-00-32-9999ab6a.webp'
            ],
            [
                'name' => 'Земельный участок № 46',
                'name_en' => 'Land plot No. 46',
                'dir' => 'areas_46',
                'cadastral' => '46:18:010102:321',
                'lnk' => 'https://kartagov.com/karta/46-18-010102-321',
                'img' => '2023-05-16_10-03-15-117ddd2e.webp'
            ],
            [
                'name' => 'Земельный участок № 47',
                'name_en' => 'Land plot No. 47',
                'dir' => 'areas_47',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 48',
                'name_en' => 'Land plot No. 48',
                'dir' => 'areas_48',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 49',
                'name_en' => 'Land plot No. 49',
                'dir' => 'areas_49',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 50',
                'name_en' => 'Land plot No. 50',
                'dir' => 'areas_50',
                'cadastral' => '46:18:010101:1260',
                'lnk' => 'https://kartagov.com/karta/46-18-010101-1260',
                'img' => '2023-05-16_10-12-19-fc847d68.webp'
            ],
            [
                'name' => 'Земельный участок № 51',
                'name_en' => 'Land plot No. 51',
                'dir' => 'areas_51',
                'cadastral' => '46:18:030501:2 46:18:030501:1',
                'lnk' => 'https://kartagov.com/karta/46-18-030501-2',
                'img' => '2023-05-16_10-16-25-45fe5c45.webp'
            ],
            [
                'name' => 'Земельный участок № 52',
                'name_en' => 'Land plot No. 52',
                'dir' => 'areas_52',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 53',
                'name_en' => 'Land plot No. 53',
                'dir' => 'areas_53',
                'cadastral' => 'нет',
                'lnk' => '',
                'img' => ''
            ],
        ];
        foreach ($data_area as $item){
            $insert_item = [
                'name' => $item['name'],
                'name_en' => $item['name_en'],
                'description' => file_get_contents(public_path('old_data//areas//'.$item['dir'].'//text.html')),
                'description_en' => file_get_contents(public_path('old_data//areas//'.$item['dir'].'//text_en.html')),
                'cadastral' => $item['cadastral'],
                'lnk' => $item['lnk'],
            ];

            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("portal_areas/".$item['img'], file_get_contents(public_path('old_data/areas/'.$item['dir'].'/'.$item['img'])), 'public');
                $insert_item['img'] = $item['img'];
            }


            DB::table("areas")->insert(
                $insert_item
            );
        }
    }
}
