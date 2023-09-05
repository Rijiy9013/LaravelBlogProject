<?php

namespace App\Http\Controllers\Personal\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalUpdateTagController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return view('admin.tags.show', compact('tag'));
    }
}
