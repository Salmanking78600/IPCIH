<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function create()
    {
        return view('admin.adminpages.dashaddcore');
    }

    public function allCorePrograms()
    {
        $programs = Program::all();
        return view('admin.adminpages.dashtotalcore', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|boolean',
        ]);
        
        
        
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('programs', 'public');
        }
    
        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'status' => $request->status,
        ]);
    
        // Redirect with success message
        return redirect()->route('programs.create')->with('success', 'Program added successfully!');
    }
    
    public function index()
    {
        $programs = Program::all();
        return view('programs.index', compact('programs'));
    }
    public function destroy($id)
    {
        // Find the program by ID
        $program = Program::find($id);
    
        if ($program) {
            // Delete the program's image from storage if it exists
            if ($program->image && Storage::disk('public')->exists($program->image)) {
                Storage::disk('public')->delete($program->image); // Deletes from storage/app/public/programs
            }
    
            // Delete the program record from the database
            $program->delete();
    
            // Redirect back with success message
            return redirect()->back()->with('success', 'Program deleted successfully.');
        }
    
        // If program not found, redirect with error message
        return redirect()->back()->with('error', 'Program not found.');
    }
    
}
