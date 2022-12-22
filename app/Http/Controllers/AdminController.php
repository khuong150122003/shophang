<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function index()
    {
        return view('registration.login');
    }
    public function show_dashboard()
    {
        return view('admin.admin_dashboard');
    }
    public function dashboard(Request $request)
    {
       $admin_email= $request->admin_email;
       $admin_password=md5($request->admin_password);
       $result= User::where('email',$admin_email)->where('password',$admin_password)->first();
        if($result)
        {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/all_product');
    } else
    {
        Session::put('message','Something went wrong');

        return Redirect::to('/logiin');
    }
    }
    public function logout()
    {
        Session::put('admin_name',null);
            Session::put('admin_id',null);
            return Redirect::to('/adminstator');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5',
        ], [
            'required' => ":attribute không được để trống",
            'min' => ":attribute phải có độ dài ít nhất :min kí tự",
            'max' => ":attribute phải có độ dài tối đa :max kí tự",
            'email' => ":attribute chưa đúng định dạng",
            'unique' => ":attribute đã tồn tại",
        ], [
            'name' => "Tên người dùng",
            'email' => "Email",
            'password' => "Mật khẩu",
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }

}
