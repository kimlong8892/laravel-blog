<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User as UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function Reg(Request $request)
    {
        if($request->method() == "GET")
        {
            return view('user.reg');
        }
        else
        {
            $email = $request->email;
            $firstName = $request->firstName;
            $lastName = $request->lastName;
            $password = Hash::make($request->password);
            $existEmail = UserModel::where('email', $email)->exists();
            if($existEmail){
                return redirect('user/reg')->with('error-reg', "Email [".$email.'] đã có người sử dụng !');
            } else {
                $user = new UserModel();
                $user->email = $email;
                $user->first_name = $firstName;
                $user->last_name = $lastName;
                $user->password = $password;
                $user->save();
                Auth::login($user);
                return redirect('/');
            }
        }
    }
    public function Login(Request $request)
    {
        if($request->method() == "GET")
        {
            return view('user.login');
        }
        else
        {
            $user = [
                'email' => $request->email,
                'password' => $request->password
            ];
            if (Auth::attempt($user))
            {
                return redirect('/');
            } 
            else 
            {
                return redirect('user/login')->with('error-login', "Sai email hoặc mật khẩu !");
            }
        }
    }
    public function showProfile(Request $request)
    {   
        $id = $request->id;
        $user = UserModel::find($id);
        return view('user.profile', compact('user'));
    }
}
