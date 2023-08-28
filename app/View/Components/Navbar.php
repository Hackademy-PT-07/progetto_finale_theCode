<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
   public $navLinks= [];
    public function __construct()
    {
        $this->navLinks = [
            "Home" => route('home'),
            __('ui.sell') => route('announcements.create'),
            __('ui.personalArea') => route('personalArea'),
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
