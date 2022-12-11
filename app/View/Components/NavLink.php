<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{

    public string $link;
    public array|string $active;
    public string $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $link, array|string $active, string $text)
    {
        $this->link = $link;
        $this->active = $active;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
