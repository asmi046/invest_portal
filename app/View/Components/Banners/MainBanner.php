<?php

namespace App\View\Components\Banners;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MainBanner extends Component
{
    public $all_banner = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->all_banner = Banner::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banners.main-banner');
    }
}
