<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Productcat extends Component
{
    public function render()
    {
        return view('livewire.productcat')
        ->extends('layouts.Home')
        ->section('content');
    }
}
