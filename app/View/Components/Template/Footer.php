<?php

namespace App\View\Components\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
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

        $articles = [
            'Lorem ipsum dolor, sit amet consectetur adipisicing.',
            'Lorem ipsum dolor, sit amet consectetur adipisicing.',
            'Lorem ipsum dolor, sit amet consectetur adipisicing.',
        ];

        return view('components.template.footer', compact('categories', 'articles'));
    }
}
