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
                'dir' => 'areas_1',
                'cadastral' => '46:01:100601',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-01-100601',
                'img' => '2023-05-11_14-33-16-9b6e6865.webp'
            ],
            [
                'name' => 'Земельный участок № 2',
                'dir' => 'areas_2',
                'cadastral' => '46:01:110501',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-01-110501',
                'img' => '2023-05-12_11-56-13-5b71f60f.webp'
            ],
            [
                'name' => 'Земельный участок № 3',
                'dir' => 'areas_3',
                'cadastral' => '46:04:020607',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-020607',
                'img' => '2023-05-12_16-13-47-fcbae9cf.webp'
            ],
            [
                'name' => 'Земельный участок № 4',
                'dir' => 'areas_4',
                'cadastral' => '46:04:151201',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-151201',
                'img' => '2023-05-12_16-19-50-8bfc8d2b.webp'
            ],
            [
                'name' => 'Земельный участок № 5',
                'dir' => 'areas_5',
                'cadastral' => '46:04:050305',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-050305',
                'img' => '2023-05-12_16-22-50-c2081332.webp'
            ],
            [
                'name' => 'Земельный участок № 6',
                'dir' => 'areas_6',
                'cadastral' => '46:04:120301',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-120301',
                'img' => '2023-05-12_16-25-24-7d8c6903.webp'
            ],
            [
                'name' => 'Земельный участок № 7',
                'dir' => 'areas_7',
                'cadastral' => '46:04:130405',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-130405',
                'img' => '2023-05-12_16-27-51-accb23d2.webp'
            ],
            [
                'name' => 'Земельный участок № 8',
                'dir' => 'areas_8',
                'cadastral' => '46:04:090302',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-04-090302',
                'img' => '2023-05-12_16-50-38-1a9c0e30.webp'
            ],
            [
                'name' => 'Земельный участок № 9',
                'dir' => 'areas_9',
                'cadastral' => '46:05:090802:1',
                'lnk' => 'https://kartagov.com/karta/46-05-090802-1',
                'img' => '2023-05-12_16-53-00-d1862b9e.webp'
            ],
            [
                'name' => 'Земельный участок № 10',
                'dir' => 'areas_10',
                'cadastral' => '46:05:000000:842',
                'lnk' => 'https://kartagov.com/karta/46-05-000000-842',
                'img' => '2023-05-12_16-56-38-980b0b61.webp'
            ],
            [
                'name' => 'Земельный участок № 11',
                'dir' => 'areas_11',
                'cadastral' => '46:05:000000:550',
                'lnk' => 'https://kartagov.com/karta/46-05-000000-842',
                'img' => '2023-05-12_16-56-38-980b0b61 (1).webp'
            ],
            [
                'name' => 'Земельный участок № 12',
                'dir' => 'areas_12',
                'cadastral' => '46:30:000007',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-30-000007',
                'img' => '2023-05-12_17-40-33-e100a1d4.webp'
            ],
            [
                'name' => 'Земельный участок № 13',
                'dir' => 'areas_13',
                'cadastral' => '46:30:000007',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-30-000007',
                'img' => '2023-05-12_17-40-33-e100a1d4.webp'
            ],
            [
                'name' => 'Земельный участок № 14',
                'dir' => 'areas_14',
                'cadastral' => '46:30:000004:553',
                'lnk' => 'https://kartagov.com/karta/46-30-000004-553',
                'img' => '2023-05-12_17-46-30-7f3d7a8b.webp'
            ],
            [
                'name' => 'Земельный участок № 15',
                'dir' => 'areas_15',
                'cadastral' => '46:30:000004:553',
                'lnk' => 'https://kartagov.com/karta/46-30-000028-3341',
                'img' => '2023-05-12_17-57-20-3ba69d48.webp'
            ],
            [
                'name' => 'Земельный участок № 16',
                'dir' => 'areas_16',
                'cadastral' => '46:06:000000:141',
                'lnk' => 'https://kartagov.com/karta/46-06-000000-141',
                'img' => '2023-05-15_11-56-54-2b548a01.webp'
            ],
            [
                'name' => 'Земельный участок № 17',
                'dir' => 'areas_17',
                'cadastral' => '46:06:011701',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-06-011701',
                'img' => '2023-05-15_12-01-06-b8fd1f35.webp'
            ],
            [
                'name' => 'Земельный участок № 18',
                'dir' => 'areas_18',
                'cadastral' => 'Нет',
                'lnk' => 'https://kartagov.com/karta/46-30-000050-1711',
                'img' => '2023-06-20_17-36-45-233cd539.webp'
            ],
            [
                'name' => 'Земельный участок № 19',
                'dir' => 'areas_19',
                'cadastral' => 'Нет',
                'lnk' => '',
                'img' => ''
            ],
            [
                'name' => 'Земельный участок № 20',
                'dir' => 'areas_20',
                'cadastral' => '46:07:140703',
                'lnk' => 'https://kartagov.com/karta/kvartal/46-07-140703',
                'img' => '2023-05-15_12-09-34-f58b5cf0.webp'
            ],
        ];
        foreach ($data_area as $item){
            Storage::disk('public')->put("portal_areas/".$item['img'], file_get_contents(public_path('old_data/areas/'.$item['dir'].'/'.$item['img'])), 'public');

            DB::table("areas")->insert(
                [
                    'name' => $item['name'],
                    'description' => file_get_contents(public_path('old_data//areas//'.$item['dir'].'//text.html')),
                    'cadastral' => $item['cadastral'],
                    'lnk' => $item['lnk'],
                    'img' => Storage::url("portal_areas/".$item['img'])
                ]
            );
        }
    }
}
