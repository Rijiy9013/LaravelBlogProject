<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;

class PersonalCreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('admin.categories.create');
    }
}
