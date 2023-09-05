<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function __invoke()
    {

        if (Auth()->user()->role){
            $categories = Category::all()->where('user_id', '=', Auth()->id())->count();
            $tags = Tag::all()->where('user_id', '=', Auth()->id())->count();
            $posts = Post::all()->where('user_id', '=', Auth()->id())->count();
        }
        else{
            $categories = Category::all()->count();
            $tags = Tag::all()->count();
            $posts = Post::all()->count();
        }
        return view('admin.main.index', compact('categories', 'tags', 'posts'));
    }
}
