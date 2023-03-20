<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // We can also add a middleware to specific routes like this.
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'show']);
    // }
 
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::all() 
            ]
        );
    }

    public function create()
    {
        return inertia('Listing/Create');
    }

    public function store(Request $request)
    {
        Listing::create($request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:15|max:1500',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_no' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ]));

        return redirect()->route('listing.index')
            ->with('success', 'Listing was created!');
    }

    public function show(Listing $listing)
    {
        return inertia(
            'Listing/Show', 
            [
                'listing' => $listing
            ]
        );
    }

    public function edit(Listing $listing)
    {
        return inertia(
            'Listing/Edit', 
            [
                'listing' => $listing
            ]
        );
    }

    public function update(Request $request, Listing $listing)
    {
        $listing->update($request->validate([
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:15|max:1500',
            'city' => 'required',
            'code' => 'required',
            'street' => 'required',
            'street_no' => 'required|min:1|max:1000',
            'price' => 'required|integer|min:1|max:20000000',
        ]));

    return redirect()->route('listing.index')
        ->with('success', 'Listing was changed!');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success', 'Listing was deleted!');
    }
}
