<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function __construct() {
        return $this->middleware('auth')->Except(['show', 'index']);    
    }

    public function show(Component $component) {
        return view('components.show', compact('component'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required'
        ]);
        $component = auth()->user()->components()->create($request->all());

        return $component;
    }

    public function create() {
        return view('components.create');
    }
}
