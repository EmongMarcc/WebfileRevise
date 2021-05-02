<?php
namespace App\View\Components;
use Illuminate\View\Component;
use Illuminate\Http\Request;
use App\Models\blogposts;

class blogposting extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
      $blogposts = blogposts::select('*')->get();
        return view('components.blogposting',['blogposts'=>$blogposts]);
    }
}
