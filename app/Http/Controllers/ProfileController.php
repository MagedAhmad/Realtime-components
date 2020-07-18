<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\ComponentResource;
use App\Component;

class ProfileController extends Controller
{
    public function show($id) 
    {
        $user = User::where('id', $id)->first();
        $components = ComponentResource::collection(Component::with('user')->where('user_id', $id)->get());

        return view('/profiles/show', compact('user', 'components'));
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
