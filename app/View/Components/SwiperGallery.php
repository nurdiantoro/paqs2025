<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SwiperGallery extends Component
{
    public $programs;

    public function __construct($programs)
    {
        $this->programs = $programs;
    }

    public function render()
    {
        return view('components.swiper-gallery');
    }
}
