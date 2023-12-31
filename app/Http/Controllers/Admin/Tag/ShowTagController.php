<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowTagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }
}
