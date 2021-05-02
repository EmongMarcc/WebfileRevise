<?php

namespace App\Http\Livewire;
use App\Models\blogposts;
use App\Models\comments;
use Illuminate\Support\Str;
use Livewire\Component;

class PostBlog extends Component
{
  public $saveSuccess = false;
  public $post;
  public $blogposts;

  protected $rules = [
      'post.c_name' => 'required|min:6',
      'post.c_email' => 'required|min:6',
      'post.rating' => 'required|min:6',
      'post.c_comment' => 'required|min:6',
  ];
  public function mount(){
      $this->post = new comments;
      $this->blogposts = blogposts::select('*')->get();
  }

      public function savePost(){
          $this->post->save();
          $this->saveSuccess = true;
      }

    public function render()
    {
        return view('livewire.post-blog')
            ->extends('layouts.Home')
            ->section('content');
    }
}
