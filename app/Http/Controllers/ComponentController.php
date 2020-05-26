<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Resources\ComponentResource;

class ComponentController extends Controller
{
    public function __construct() {
        return $this->middleware('auth')->Except(['show', 'index']);    
    }


    public function index() {
        $components = ComponentResource::collection(Component::with('user')->where('private', 0)->get());
        return view('components.index', compact('components'));
    }

    public function show(Component $component) {
        return view('components.show', compact('component'));
    }

    public function create() {
        return view('components.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'image' => 'required',
            'private' => 'required'
        ]);
        
        $request['slug'] = Str::slug($request->name, '-');
        \Storage::disk('local')->put($request['slug'], $request->image);

        $component = auth()->user()->components()->create($request->all());

        return $component;
    }

    public function edit(Component $component) {
        return view('components.edit', compact('component'));
    }

    public function update(Component $component, Request $request) {
        $this->authorize('update', $component);

        $component->update(request()->validate([
            'name' => 'required',
            'body' => 'required',
            'description' => 'nullable'
        ]));

        return $component;
    }

    public function download($slug) {
        $component = Component::where('slug', $slug)->first();
        $filename = $slug . ".html";
        header("Content-type: text/plain");
        header("Content-Disposition: attachment; filename=" . $filename);
        echo $component->body;
    }
}
