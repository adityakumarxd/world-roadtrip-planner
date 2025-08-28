<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RoadTrip;
use Illuminate\Http\Request;

class RoadTripController extends Controller
{
    // Show all trips in web UI
    public function index() {
        $trips = RoadTrip::all();
        return view('trips.index', compact('trips'));
    }

    // Show create trip form
    public function create() {
        return view('trips.create');
    }

    // Store trip from form
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'places.*.place_name' => 'required|string'
        ]);

        $trip = RoadTrip::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? ''
        ]);

        if ($request->has('places')) {
            foreach ($request->places as $place) {
                $trip->places()->create([
                    'place_name' => $place['place_name'],
                    'place_description' => $place['place_description'] ?? ''
                ]);
            }
        }

        return redirect('/trips');
    }

    // Show one trip details
    public function show($id) {
        $trip = RoadTrip::with('places', 'reviews')->findOrFail($id);
        return view('trips.show', compact('trip'));
    }

    // Store review submission
    public function addReview(Request $request, $id) {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        $trip = RoadTrip::findOrFail($id);
        $trip->reviews()->create($validated);

        return redirect("/trips/$id");
    }
}
