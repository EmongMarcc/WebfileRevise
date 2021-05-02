<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\blogposts;
use App\Models\comments;
class Blogprofile extends Component
{
  public $blogposts;
  public $comments;
  public function mount($id){
      $this->blogposts = blogposts::findOrFail($id);
      $this->comments = comments::select('*')->where('blog_id',$id)->get();
  }
    public function render()
    {
        return view('livewire.pages.blogprofile')
        ->extends('layouts.Home')
        ->section('content');
    }
}
