<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MunitipalStandartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        include 'PageArrays/MunitipalStandart.php';

        foreach ($data_munitipal as $item){ 
            
            $adding_item = $item;

            $adding_item['slug'] = Str::slug($item['title']);
            $adding_item['passport_files'] = json_encode($adding_item['passport_files']);

            if (isset($adding_item['description']) && !empty($adding_item['description']))
                $adding_item['description'] = file_get_contents(public_path('old_data//municipal_standart//'.$item['folder'].'//'.$item['description']));

            if (isset($item['gerb']) && !empty($item['gerb'])) {
                Storage::disk('public')->put("munitipal_standarts/".$item['gerb'], file_get_contents(public_path('old_data//municipal_standart//'.$item['folder'].'//'.$item['gerb'])), 'public');
            }

            if (isset($item['glava_photo']) && !empty($item['glava_photo'])) {
                Storage::disk('public')->put("munitipal_standarts/".$item['glava_photo'], file_get_contents(public_path('old_data//municipal_standart//'.$item['folder'].'//'.$item['glava_photo'])), 'public');
            }



            if (isset($item['passport_files']) && !empty($item['passport_files'])) {
                foreach ($item['passport_files'] as $fitem) {
                    if (empty($fitem['file'])) continue; 
                    Storage::disk('public')->put("munitipal_standarts/".$fitem['file'], file_get_contents(public_path('old_data/municipal_standart/'.$item['folder'].'//'.$fitem['file'])), 'public');
                }
            }

            $p_id = DB::table("munitipal_standarts")->insertGetId(
                $adding_item
            );
        }

    }
}
