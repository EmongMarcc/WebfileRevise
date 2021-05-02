<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigationcc extends Component
{
    public function render()
    {
        return view('livewire.navigationcc')
        ->extends('layouts.Home')
        ->section('content');
    }
}
