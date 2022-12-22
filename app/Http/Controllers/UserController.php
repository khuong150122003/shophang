<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //

    function list()
    {

        $users = User::get();


        return view('admin.user.list', compact('users'));
    }

    function add()
    {
        return view('admin.user.add');
    }

    function edit($id)
    {
        $user = User::where('id', '=', $id)->get();

        return view(
            'admin.user.edit',
            [
                'user' => $user
            ]
        );
        // $user = User::find($id);
        // return view('admin.user.edit', compact('user'));
    }

    function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
        ]);

        return redirect('admin/user/list')->with('status', 'Chỉnh sửa người dùng thành công!');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'required' => ":attribute không được để trống",
            'min' => ":attribute phải có độ dài ít nhất :min kí tự",
            'max' => ":attribute phải có độ dài tối đa :max kí tự",
            'email' => ":attribute chưa đúng định dạng",
            'unique' => ":attribute đã tồn tại",
            'confirmed' => ":attribute phải trùng khớp nhau",
        ], [
            'name' => "Tên người dùng",
            'email' => "Email",
            'password' => "Mật khẩu",
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);

        return redirect('admin/user/list-admin')->with('status', 'Thêm người dùng thành công!');
    }

    function delete($id)
    {
        if (session('user_id') == $id) {
            return redirect('admin/user/list', 'status', 'Bạn không thể xóa tài khoản của bạn ra khỏi hệ thống');
        } else {
            User::find($id)->delete();
            // dd(1);
            return redirect('/admin/user/list')->with('success', 'your message,here');;
        }
    }
}
