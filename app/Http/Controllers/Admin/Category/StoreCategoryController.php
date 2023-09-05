<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreCategoryController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth()->user()->id;
        $category = Category::firstOrNew($data);
        if ($category->exists) {
            return redirect()->back()->with('warning', 'Категория уже существует');
        }

        $category->save();

        return redirect()->route('category.index');
    }
}
