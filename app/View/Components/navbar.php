<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{
    public $navbar;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($navbar)
    {
        $this->navbar = $navbar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
