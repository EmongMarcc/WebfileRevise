<?php

namespace App\Http\Livewire\Layout;

use Livewire\Component;

class Components extends Component
{
    public function render()
    {
        return view('livewire.layout.components')
        ->extends('layouts.Home')
        ->section('content');
    }
}
