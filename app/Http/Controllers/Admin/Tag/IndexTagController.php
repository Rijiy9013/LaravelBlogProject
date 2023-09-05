<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexTagController extends Controller
{
    public function __invoke()
    {
        if (Auth()->user()->role){
            $tags = Tag::all()->where('user_id', '=', Auth()->id());
        }
        else{
            $tags = Tag::all();
        }
        return view('admin.tags.index', compact('tags'));
    }
}
