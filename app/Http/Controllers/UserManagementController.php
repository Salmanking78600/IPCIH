<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth; // Correctly import Auth facade
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    // Delete user
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        // 🚫 Prevent logged-in user from deleting themselves
        if (Auth::id() == $user->id) {
            return redirect()->back()->with('error', 'You cannot delete your own account.');
        }

        // ✅ Delete other users
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editUser', compact('user')); // You can create a separate view for edit if needed
    }

    // Update User
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Optionally, handle password update if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return redirect()->route('totaladmin')->with('success', 'User updated successfully.');
    }
}
