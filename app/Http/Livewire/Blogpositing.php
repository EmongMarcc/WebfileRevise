<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\blogposts;

class Blogpositing extends Component
{
      public $blogposts;
      public function mount(){
            $this->blogposts = blogposts::select('*')->get();
      }
    public function render()
    {
        return view('livewire.blogpositing')
        ->extends('layouts.app')
        ->section('content');
    }
}
