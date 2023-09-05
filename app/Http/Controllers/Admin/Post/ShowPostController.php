<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends BasePostController
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
