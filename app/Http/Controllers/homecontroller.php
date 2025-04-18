<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function home()
    {
        // Fetch all programs from the database, only active programs
        $programs = Program::where('status', 1)->get(); // Only fetch active programs

        // Pass the programs to the view (home view or any specific page)
        return view('pages.home', compact('programs'));
    }
}
