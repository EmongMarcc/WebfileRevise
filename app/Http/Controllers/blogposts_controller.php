<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\blogposts;
use App\Models\filegalleries;
use Illuminate\Http\Request;
use File;
use Storage;


class blogposts_controller extends Controller
{
    public function index(){
      return view('welcome');
    }
    public function main(){
        return view('page.blogs');
    }
    public function addPost(){
      if (request('create_idHere')) {
        $newid = request('create_idHere');
      }else {
        $newid = blogposts::max('id') + 1;
      }
        $blogposts = blogposts::findOrNew($newid);
        $blogposts->title = request('title');
        $blogposts->body = request('body');
        $blogposts->category = request('category');
        $blogposts->p_date = request('p_date');
        $blogposts->audio = request('audio');
        $blogposts->save();
      return redirect('/dashboard')->with('upload','New Equipment Added Successful!');
    }
    public function filegallery(request $request){
        $filegallery = new filegalleries();
        $filegallery->fg_name = request('fg_name');
        for( $i=0 ; $i < count($_FILES["fg_file"]["name"]) ; $i++ ){
          $r_fileth = $request->file('fg_file')[$i];
          $asdsadadadad = $request->file('fg_file')[$i]->getClientOriginalName();
          $target_dir = "storage/image/".request('fg_name')."/".$request->file('fg_file')[$i]->getClientOriginalName();
          Storage::disk('s3')->put($target_dir, file_get_contents($request->file('fg_file')[$i]), 'public');
        }
        $filegallery->fg_file = $_FILES["fg_file"]["name"];
        $filegallery->save();
      return redirect('/dashboard')->with('upload','File Uploaded Successful!');
    }
    public function status($id){
        $blog = blogposts::findOrFail($id);
        if ($blog->status === 'Inactive') {
          $blog->status = 'Active';
          $message = 'Blog Posted Successful!';
        }else {
          $blog->status = 'Inactive';
          $message = 'Post Inactive';
        }
          $blog->save();

      return redirect('/dashboard')->with('upload',$message);
    }
    public function delete($id){
        $blog = blogposts::findOrFail($id)->delete();
      return redirect('/dashboard')->with('upload','Posted Blog Deleted Successfully.');
    }
}
