<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexPostController extends BasePostController
{
    public function __invoke()
    {
        if (Auth()->user()->role){
            $posts = Post::all()->where('user_id', '=', Auth()->id());
        }
        else{
            $posts = Post::all();
        }
        return view('admin.posts.index', compact('posts'));
    }
}
