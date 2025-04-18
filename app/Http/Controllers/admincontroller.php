<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function adminpage()
    {
        $totalAdmins = User::count();
        return view('admin.adminpages.dashadmin', compact('totalAdmins'));
    }
    public function totaladmin()
    {
        $users = User::all(); // Fetch all user data
        return view('admin.adminpages.dashtotaladmin', compact('users'));
    }

   
   
}