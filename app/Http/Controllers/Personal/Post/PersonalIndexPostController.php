<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PersonalIndexPostController extends BasePostController
{
    public function __invoke()
    {
        $posts = Post::all()->where('author_id', '=', Auth()->id());
        return view('admin.posts.index', compact('posts'));
    }
}
