<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $user = User::join('detail_users', 'users.id', '=', 'detail_users.user_id', 'users')
        ->join('roles', 'users.role_id', '=', 'roles.id')
        ->get(['users.name', 'detail_users.address', 'detail_users.phone', 'roles.role_name']);


        return view('user.daftar-user', compact('user'));
    }
}
