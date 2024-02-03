<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();

        return view('pages.user.locations.index', [
            'locations' => $locations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.user.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocationRequest $request)
    {
        Location::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'street' => $request->street,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'website' => $request->website,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return to_route('locations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('pages.user.locations.show', [
            'location' => $location,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('pages.user.locations.edit', [
            'location' => $location,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->fill([
            'name' => $request->name,
            'street' => $request->street,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'website' => $request->website,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $location->save();

        return to_route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return to_route('locations.index');
    }
}
