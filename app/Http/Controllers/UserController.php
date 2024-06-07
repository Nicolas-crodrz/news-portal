<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Flash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'role' => ['required', Rule::in(['admin', 'standard'])],
            ]);

            $validatedData['password'] = Hash::make($request->password);

            User::create($validatedData);

            session()->flash('flash_notification.message', 'User created successfully.');
            session()->flash('flash_notification.level', 'success');

            return redirect()->route('users.index');
        } catch (\Exception $e) {
            session()->flash('flash_notification.message', 'Failed to create user: ' . $e->getMessage());
            session()->flash('flash_notification.level', 'danger');

            return redirect()->route('users.create');
        }
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users')->ignore($user->id),
                ],
                'password' => 'nullable|string|min:8|confirmed',
                'role' => ['required', Rule::in(['admin', 'standard'])],
            ]);

            if ($request->password) {
                $validatedData['password'] = Hash::make($request->password);
            }

            $user->update($validatedData);

            session()->flash('flash_notification.message', 'User updated successfully.');
            session()->flash('flash_notification.level', 'success');

            return redirect()->route('users.index');
        } catch (\Exception $e) {
            session()->flash('flash_notification.message', 'Failed to update user: ' . $e->getMessage());
            session()->flash('flash_notification.level', 'danger');

            return redirect()->route('users.edit', $user->id);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();

            session()->flash('flash_notification.message', 'User deleted successfully.');
            session()->flash('flash_notification.level', 'success');

            return redirect()->route('users.index');
        } catch (\Exception $e) {
            session()->flash('flash_notification.message', 'Failed to delete user: ' . $e->getMessage());
            session()->flash('flash_notification.level', 'danger');

            return redirect()->route('users.index');
        }
    }
}
