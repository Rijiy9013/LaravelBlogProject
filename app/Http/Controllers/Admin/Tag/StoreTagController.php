<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class StoreTagController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth()->user()->id;
        $tag = Tag::firstOrNew($data);
        if ($tag->exists) {
            return redirect()->back()->with('warning', 'Тэг уже существует');
        }

        $tag->save();
        return redirect()->route('tag.index');
    }
}
