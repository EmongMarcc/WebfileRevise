<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\filegalleries;

class Filegallery extends Component
{
    public $filegallery;

  public function mount(){
        $this->filegallery = filegalleries::select('*')->get();
  }
    public function render()
    {
        return view('livewire.filegallery');
    }
}
