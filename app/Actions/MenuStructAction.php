<?php

namespace App\Actions;

use App\Models\Menu\Menu;

class MenuStructAction {
    public function handle() {
        $menu = Menu::where('parent', 0)->get();
        $menu_struct = [];
        foreach ($menu as $item){
            $punct = [
                'item' => $item,
                'submeny' => []
            ];

            $punct['submeny'] = Menu::where('menu_name', $item->menu_name)
                    ->where('parent', $item->id)
                    ->orderBy('order',"DESC")
                    ->get();

            $menu_struct[$item->menu_name][] = $punct;

        }

        return $menu_struct;
    }
}
