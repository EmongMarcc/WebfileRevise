<?php

namespace App\Http\Livewire\Layout;
use App\Models\blogposts;
use Illuminate\Support\Str;
use Livewire\Component;

class Leftslider extends Component
{
  public $searchTerm;
  public $tableSearch;
  public $readyToLoad = false;

    public function loadPosts()
    {
      $this->readyToLoad = true;
    }
    public function render()
    {
      $searchTerm = '%'.$this->searchTerm.'%';
      $this->tableSearch = blogposts::where([['status','Active'],['title', 'LIKE', $searchTerm]])->orWhere([['status','Active'],['category', 'LIKE', $searchTerm]])->orWhere([['status','Active'],['body', 'LIKE', $searchTerm]])->get();
        return view('livewire.layout.leftslider');
    }
}
