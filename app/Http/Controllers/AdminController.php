<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/dashboard');
    }

    public function users()
    {
        // Fetch users from the database
        // $users = \App\Models\User::all();
        
        // Return the view with the users data
        // return view('admin/users', compact('users'));
        return view('admin/users');
    }
}