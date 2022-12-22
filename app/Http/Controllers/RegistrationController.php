<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    public function register(Request $request)
    {
       $validation =  $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $password =md5($request->password);

        // dd($password);
        $user = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => $password
        ]);

        auth()->login($user);
        return redirect()->to('/logiin');
    }
}













