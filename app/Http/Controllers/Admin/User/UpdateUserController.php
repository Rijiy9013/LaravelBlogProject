<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        if ($user->id == auth()->user()->id && $request->has('role')) {
            return redirect()->back()->withErrors(['role' => 'Вы не можете изменить свою собственную роль.']);
        }
        $user->update($data);
        return view('admin.users.show', compact('user'));
    }
}
