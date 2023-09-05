<?php

namespace App\Http\Controllers\Personal\Post;

use App\Models\Category;
use App\Models\Tag;

class PersonalCreatePostController extends BasePostController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
