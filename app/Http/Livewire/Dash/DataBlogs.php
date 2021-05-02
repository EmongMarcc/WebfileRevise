<?php

namespace App\Http\Livewire\Dash;

use Livewire\Component;
use App\Models\blogposts;
class DataBlogs extends Component
{
  public $blogposts;
  public function mount(){
        $this->blogposts = blogposts::select('*')->get();
      }
    public function render()
    {
        return view('livewire.dash.data-blogs');
    }
}
