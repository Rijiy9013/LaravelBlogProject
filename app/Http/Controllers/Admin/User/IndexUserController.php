<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class IndexUserController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
}
