<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navlink extends Component
{
    public $link;
    public $children;
    public function __construct($link, $children)
    {
        $this->link = $link;
        $this->children = $children;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navlink');
    }
}
