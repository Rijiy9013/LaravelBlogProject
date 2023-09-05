<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PersonalIndexCategoryController extends Controller
{
    public function __invoke()
    {
        $categories = Category::get()->where('author_id', '=', Auth()->id());
        return view('admin.categories.index', compact('categories'));
    }
}
