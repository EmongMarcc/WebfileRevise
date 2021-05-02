<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class Breadcrumbs extends Component
{
  public $pages;
    public function render()
    {
        return view('livewire.layout.breadcrumbs');
    }
}
