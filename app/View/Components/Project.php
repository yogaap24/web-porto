<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public array $stacks;
    public array $images;
    
    public function __construct(
        public string $title,
        public string $about,
        array $stacks,
        array $images,
        public string $website,
        public string $github,
    )
    {
        $this->stacks = $stacks;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
