<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\blogposts;
use App\Models\comments;
class Blogmain extends Component
{
  public $blogposts;
  public $comments;
  public function mount(){
        $this->blogposts = blogposts::select('*')->where('status','active')->get();
        $this->comments = comments::select('*')->get();
  }
    public function render()
    {
        return view('livewire.blogmain');
    }
}
