<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{

    public function get_all_files($dir, $resolution) {
        $fname = [];

        foreach (glob($dir . '//*'.$resolution) as $fileName) {
            $fname[basename($fileName)] = $dir. "//" . basename($fileName);
        }

        return $fname;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $page_data = [
        //     'Презентация региона' => [
        //         "dir" => "presentation",
        //         "subpage" => [

        //         ]
        //     ],

        //     'Социально-экономическое развитие. Стратегия социально-экономического развития Курской области до 2030 года' => [
        //         "dir" => "Socio_economic_development_1",
        //         "subpage" => [
        //             "Промышленное и обрабатывающие производства" => [
        //                 'dir' => "promand"
        //             ]
        //         ]
        //     ],

        // ];

        // foreach ($page_data as $key => $item){

        //     $images = $this->get_all_files(public_path("old_data/pages/".$item['dir']."/img"), "*.*");

        //     foreach ($images as $fn => $img)
        //     {
        //         Storage::disk('public')->put("page_data/".$fn, file_get_contents($img), 'public');
        //     }


        //     DB::table("news")->insert(
        //         [
        //             'title'=> $item['title'],
        //             'slug' => Str::slug($item['title']),
        //             'public_time' => date("Y-m-d H:i:s", strtotime($item['public_time'])),
        //             'img' => Storage::url("portal_news/".$item['img']),
        //             'description' => file_get_contents(public_path('old_data//news//'.$item['dir'].'//text.html')),
        //             'seo_title' => $item["seo_title"],
        //             'seo_description' => $item["seo_description"]
        //         ]
        //     );
        // }

    }
}
