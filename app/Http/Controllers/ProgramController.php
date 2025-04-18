<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // Show the form to create a new program
    public function create()
    {
        // Pass any necessary data to the view
        return view('admin.adminpages.dashaddcore');
    }

  

    // Store the new program in the database
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Added max size validation
            'status' => 'required|boolean',
        ]);

        // Initialize $imagePath to null (in case no image is uploaded)
        $imagePath = null;

        // Handle the image upload if present
        if ($request->hasFile('image')) {
            // Store the image in the 'programs' folder under 'public' disk
            $imagePath = $request->file('image')->store('programs', 'public');
        }

        // Create the new program record in the database
        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,  // Save image path or null
            'status' => $request->status,
        ]);

        // Redirect back with success message
        return redirect()->route('programs.create')->with('success', 'Program added successfully!');
    }
}
