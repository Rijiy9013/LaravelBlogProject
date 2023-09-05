<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class PersonalDeleteCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
