<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Shopsmain extends Component
{
    public function render()
    {
        return view('livewire.pages.shopsmain')
        ->extends('layouts.Home')
        ->section('content');
    }
}
