<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function adminpage()
    {
        // Get total admins
        $totalAdmins = User::count();
        
        // Get total core programs
        $totalPrograms = Program::count();  // Assuming `Program` is your model for core programs
    
        // Pass both variables to the view
        return view('admin.adminpages.dashadmin', compact('totalAdmins', 'totalPrograms'));
    }
    
    public function totaladmin()
    {
        $users = User::all(); // Fetch all user data
        return view('admin.adminpages.dashtotaladmin', compact('users'));
    }

   
   
}