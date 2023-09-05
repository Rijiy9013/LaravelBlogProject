<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexCategoryController extends Controller
{
    public function __invoke()
    {
        if (Auth()->user()->role){
            $categories = Category::all()->where('user_id', '=', Auth()->id());
        }
        else{
            $categories = Category::all();
        }

        return view('admin.categories.index', compact('categories'));
    }
}
