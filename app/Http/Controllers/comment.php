<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use Log;
class comment extends Controller
{
    public function ajaxRequestPost(Request $request){
      $input = $request->all();
      $comment = new comments();
      $comment->c_name = $input['c_name'];
      $comment->c_email = $input['c_email'];
      $comment->rating = $input['rating'];
      $comment->c_comment = $input['c_comment'];
      $comment->blog_id = $input['blog_id'];
      $comment->save();
      Log::info($input);
      return response()->json(['success'=>'Comment added.']);
    }
  }
