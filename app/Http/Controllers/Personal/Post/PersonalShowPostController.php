<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PersonalShowPostController extends BasePostController
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
