<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostController extends Controller
{
    public function detail($slug){
        $post = Post::where('slug',$slug)->first();
        $tags = Tag::all();
        $category = Category::find($post->category_id);
        $relatedPosts = $category->posts()->take(3)->get();
        return view('postDetail',compact('post','relatedPosts'));
    }
    public function postByTag($slug){
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->get();
        return view('index',compact('posts'));
    }
    public function postByCategory($slug){
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->get();
        return view('index',compact('posts'));
    }
}
