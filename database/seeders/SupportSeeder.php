<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        include "PageArrays/Support_measures.php";

        foreach ($support_measures as $item){
            $adding_item = $item;


            if (isset($item['img']) && !empty($item['img'])) {
                Storage::disk('public')->put("support_m/".$item['img'], file_get_contents(public_path('old_data//support_measures//'.$item['title']."//".$item['img'])), 'public');
            }

            if (isset($item['inner_img']) && !empty($item['inner_img'])) {
                Storage::disk('public')->put("support_m/".$item['inner_img'], file_get_contents(public_path('old_data//support_measures//'.$item['title']."//".$item['inner_img'])), 'public');
            }

            if (isset($adding_item['description']) && !empty($adding_item['description']))
                $adding_item['description'] = file_get_contents(public_path('old_data//support_measures//'.$item['title']."//".$item['description']));

            if (isset($adding_item['short_description']) && !empty($adding_item['short_description']))
                $adding_item['short_description'] = file_get_contents(public_path('old_data//support_measures//'.$item['title']."//".$item['short_description']));

            $adding_item['slug'] = Str::slug($item['title']);

            unset($adding_item['folder']);
            $p_id = DB::table("supports")->insertGetId(
                $adding_item
            );

        }

    }
}
