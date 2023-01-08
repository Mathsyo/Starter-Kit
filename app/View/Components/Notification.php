<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{

    public string $type;
    public string $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type, string $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification');
    }
}
