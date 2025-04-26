<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\Register;
class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    public function register_user(Register $request){
        $validate =$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:8|confirmed',
            'remember_token'=>'required'
        ]);
        $user = new User();
        $user->addUser($validate);
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function login_user(Request $request){
        $validate = $request->validate([
            'email'=>'required|email|max:255',
            'password'=>'required|min:8'
        ]);

        // $user = new User();
        // $user ->login($validate);
        $user = (new User())->login($validate);
        if ($user){
             session(['user_id' => $user->id, 'user_name' => $user->name]);
            return redirect()->route('index')->with('success', 'Login successful!');
        }
       return redirect()->route('login')->with('error', 'Invalid credentials!');
    }

    public function logout(Request $request){
         // Clear all session data
    session()->flush();
        return redirect()->route('login')->with('success', 'Logout successful!');
    }
     
}