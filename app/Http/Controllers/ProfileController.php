<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show($id) 
    {
        $user = User::where('id', $id)->first();
        return view('/profiles/show', compact('user'));
    }

    public function update(User $user, Request $request) 
    {
        $this->authorize('update', $user);

        $user->update(request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]));  

        return $user;
    }
}
