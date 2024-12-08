<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', ['user' => $request->user()]);
    }

    public function update(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)->ignore($request->user()->id)],
        ];

        $validated = $request->validate($rules);
        $validated['email'] = strtolower($validated['email']);

        $request->user()->fill($validated)->save();

        return redirect()->route('profile.edit')->with('success', 'Profile has been updated!');
    }
}
