<?php

namespace App\Http\Controllers\Personal\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class PersonalIndexTagController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all()->where('author_id', '=', Auth()->id());
        return view('admin.tags.index', compact('tags'));
    }
}
