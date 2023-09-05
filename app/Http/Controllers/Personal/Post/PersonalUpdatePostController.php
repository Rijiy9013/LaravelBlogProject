<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class PersonalUpdatePostController extends BasePostController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);
        return view('admin.posts.show', compact('post'));
    }
}
