<?php

namespace App\Http\Controllers\Personal\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalEditTagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
