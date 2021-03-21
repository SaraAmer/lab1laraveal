<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $value;
    public $class;
    public $href;
    public function getValue()
    {
        return $this->value;
    }
    public function __construct($value, $class, $href)
    {
        $this->value=$value;
        $this->class=$class;
        $this->href=$href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
