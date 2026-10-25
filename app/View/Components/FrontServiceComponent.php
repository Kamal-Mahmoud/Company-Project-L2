<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontServiceComponent extends Component
{
    public $Services;
    /**
     * Create a new component instance.
     */
    
    public function __construct()
    {
        $this->Services = \App\Models\Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-service-component');
    }
}
