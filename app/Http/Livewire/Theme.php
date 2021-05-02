<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Theme extends Component
{
    public function render()
    {
        return view('livewire.theme')
        ->extends('layouts.Home')
        ->section('content');
    }
}
