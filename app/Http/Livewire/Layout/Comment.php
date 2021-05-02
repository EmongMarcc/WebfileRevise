<?php

namespace App\Http\Livewire\Layout;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\comments;

class Comment extends Component
{
  public $comments;
  public $blogid;
  public function mount($blogid){
      $this->comments = comments::select('*')->where('blog_id',$blogid)->get();
  }
      public function render()
      {
          return view('livewire.layout.comment');
      }
}
