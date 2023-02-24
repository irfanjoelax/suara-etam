<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MobileNav extends Component
{
    public function render(): View|Closure|string
    {
        $categories = [
            'Religion',
            'Sport',
            'Travel',
            'Techno',
            'Worklife',
            'Future',
        ];

        return view('components.template.mobile-nav', compact('categories'));
    }
}
