<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsPostController extends Controller
{
    public function postList(){
        $postList = NewsPost::get();
        return view('posts.posts',['postList'=>$postList]);
    }
    public function addNewPost(Request $request){

        $posts_title = $request->title;
        $posts_description = $request->description;

        $news_post = new NewsPost();
        $news_post->title = $posts_title;
        $news_post->description = $posts_description;
        $news_post->save();

        return redirect()->back();
    }
}
