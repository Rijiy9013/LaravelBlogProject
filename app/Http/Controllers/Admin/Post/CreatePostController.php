<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;

class CreatePostController extends BasePostController
{
    public function __invoke()
    {

        if (Auth()->user()->role){
            $categories = Category::all()->where('user_id', '=', Auth()->id());
            $tags = Tag::all()->where('user_id', '=', Auth()->id());
        }
        else{
            $categories = Category::all();
            $tags = Tag::all();
        }
        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
