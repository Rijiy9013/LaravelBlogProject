<?php

namespace App\Http\Controllers\Personal\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalCreateTagController extends Controller
{
    public function __invoke()
    {
        return view('admin.tags.create');
    }
}
