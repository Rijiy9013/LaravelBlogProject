<?php

namespace App\Http\Controllers\Personal\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalShowTagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }
}
