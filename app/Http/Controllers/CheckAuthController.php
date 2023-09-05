<?php

namespace App\Http\Controllers;


use App\Models\User;

class CheckAuthController extends Controller
{

    public function __invoke(User $user)
    {
        if (Auth()->guard()->hasUser()){
            if ((int)$user->role !== User::ROLE_ADMIN){
                return redirect()->route('personal');
            }
            else{
                return redirect()->route('main');
            }
        }
        abort(401);
    }
}
