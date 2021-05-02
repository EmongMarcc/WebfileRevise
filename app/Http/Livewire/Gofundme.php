<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Gofundme extends Component
{
    public function render()
    {
        return view('livewire.gofundme')
        ->extends('layouts.Home')
        ->section('content');
    }
}
