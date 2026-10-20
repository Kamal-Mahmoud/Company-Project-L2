<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color;
    public string $text;

    public function __construct(
        public string $routeName,
        public string $type,
        public mixed $routeParam = null,
    )
    {
        if ($type === 'create') {
            $this->color = 'p-2 px-2 my-3 btn btn-md btn-primary font-weight-bold';
            $this->text = __('keywords.add_new');
        }
        elseif ($type === 'edit') {
            $this->color = 'btn btn-sm btn-outline-primary';
            $this->text = 'Edit';
        }
        elseif ($type === 'delete') {
            $this->color = 'p-2 px-2 my-3 btn btn-md btn-danger';
            $this->text = '<i class="fas fa-trash fa-2x"></i>';
        }
        elseif ($type === 'view') {
            $this->color = 'p-2 px-2 my-3 btn btn-md btn-info';
            $this->text = '<i class="fas fa-eye fa-2x"></i>';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
