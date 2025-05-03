<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\View\View;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $properties = Property::with(['images'])->where('is_featured', true)->inRandomOrder()->take(9)->get();

        return view('properties.index', compact('properties'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property): View
    {
        return view('properties.show', compact('property'));
    }
}
