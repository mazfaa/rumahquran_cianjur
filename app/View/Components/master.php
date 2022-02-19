<?php

namespace App\View\Components;

use Illuminate\View\Component;

class master extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $page_title;
    public function __construct($page_title = null)
    {
        $this->page_title = $page_title ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.master');
    }
}
