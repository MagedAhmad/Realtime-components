<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Component;

class RatingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');    
    }

    public function store(Request $request) {
        $record = auth()->user()->createRating($request->all());      
    }
}
