<?php

namespace App\Actions;

use App\Models\Menu\Menu;

class MenuStructAction {
    public function handle() {
        // $menu = Menu::where('parent', 0)->get();
        // $menu_struct = [];
        // foreach ($menu as $item){
        //     $punct = [
        //         'item' => $item,
        //         'submeny' => []
        //     ];

        //     $punct['submeny'] = Menu::where('menu_name', $item->menu_name)
        //             ->where('parent', $item->id)
        //             ->orderBy('order',"DESC")
        //             ->get();

        //     $menu_struct[$item->menu_name][] = $punct;

        // }

        // return $menu_struct;

        $menu = Menu::all();
        $menu_struct = [];

        foreach ($menu as $item) {

            if ($item->parent != 0) continue;

            $punct = [
                        'item' => $item,
                        'submeny21' => []
                    ];

            $menu_struct[$item->menu_name][] = $punct;
        }

        foreach ($menu_struct as $key => $item) {
            foreach ($item as $sub_item) {
                // $sub_item['submeny'] = Menu::where('menu_name', $key)
                //     ->where('parent', $sub_item['item']->id)
                //     ->orderBy('order',"DESC")
                //     ->get();

                $sub_item['submeny']["rrr"] = 1;
            }
        }
        dd($menu_struct);
        return $menu_struct;
    }
}
