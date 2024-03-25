<?php

namespace App\View\Components\RegionParametrs;

use Closure;
use App\Models\RegionParametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RegionParametrSection extends Component
{
    public $region_parametrs;
    public $region_parametrs_keys;
    public $region_parametrs_keys_en;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $all_param = RegionParametr::all();

        $this->region_parametrs = [];

        $eng = [];
        foreach ($all_param as $item) {
            $this->region_parametrs[$item->type][] = $item;
            $eng[$item->type_en][] = $item;
        }

        $this->region_parametrs_keys = array_keys($this->region_parametrs);
        $this->region_parametrs_keys_en = array_keys($eng);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.region-parametrs.region-parametr-section');
    }
}
