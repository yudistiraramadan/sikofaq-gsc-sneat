<?php

namespace App\Http\Controllers;

// use datatables;
use App\Models\User;
use App\Models\DetailUser;
use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user(Request $request)
    {
        if ($request->ajax()) {
            $user = User::join('detail_users', 'users.id', '=', 'detail_users.user_id', 'users')
                ->join('roles', 'users.role_id', '=', 'roles.id')
                ->get(['users.name', 'detail_users.address', 'detail_users.phone', 'roles.role_name']);
            return datatables()->of($user)

                ->addColumn('action', function ($user) {
                    $button = '<div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a><a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a></div>';
                    return $button;
                })->rawColumns(['action'])->make(true);
        }
        return view('user.daftar-user');



    }

    public function create()
    {
        return view('user.tambah-user');
    }

    public function insert(Request $request)
    {
        $data = $request->all();

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_id = $data['role_id'];
        $user->save();

        $detail_user = new DetailUser;
        $detail_user->user_id = $user->id;
        // $detail_user->photo = $data['photo'];
        $detail_user->address = $data['address'];
        $detail_user->phone = $data['phone'];
        $detail_user->gender = $data['gender'];
        $detail_user->save();

        // $role = new Role;
        // $role->role_id = $data['role_id'];
        // dd($role);
        // dd($detail_user);

        // if ($request->hasFile('photo')) {
        //     $request->file('photo')->move('foto-relawan/', $request->file('photo')->getClientOriginalName());
        //     $detail_user->photo = $request->file('photo')->getClientOriginalName();
        // }
        return redirect()->route('user')->with('success', 'Data User Berhasil Ditambahkan');
    }
}
