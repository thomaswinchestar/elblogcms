<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class HomeController extends Controller
{
   public function index(){
       $postCount = Post::get()->count();
       $categoryCount = Category::get()->count();
       $tagCount = Tag::get()->count();
       $userCount = User::get()->count();

       $posts = Post::take(5)->get();
       $tags = Tag::take(5)->get();
       $category = Category::take(5)->get();
       $users = User::take(5)->get();

       return view('admin.home',compact('postCount','categoryCount','tagCount','userCount','posts','tags','category','users'));
   }
}
