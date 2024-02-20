<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $img,
        public string $about,
        public string $stacks,
        public string $website,
        public string $github,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
