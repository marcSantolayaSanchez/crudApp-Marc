<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('crud', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email'));

        return redirect()->route('crud')->with('success', 'User updated successfully.');
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('crud')->with('success', 'User deleted successfully.');
    }   
}
