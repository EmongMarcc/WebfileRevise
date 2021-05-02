<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Custfeedbacks extends Component
{
    public function render()
    {
        return view('livewire.custfeedbacks')
        ->extends('layouts.Home')
        ->section('content');
    }
}
