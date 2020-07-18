<?php

namespace App\Http\Controllers\Api;

use App\Component;
use App\Http\Controllers\Controller;
use App\Http\Resources\ComponentResource;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $components = ComponentResource::collection(
            Component::with('user')->where('private', 0)->latest()->get()
        );

        return json_encode($components);
    }
}
