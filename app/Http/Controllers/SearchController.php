<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Retrieve the search query parameters from the request
        $propertyName = $request->input('property_name');
        $location = $request->input('location');
        $propertyType = $request->input('property_type');

        // Perform the search based on the provided queries
        $results = Property::query()
            ->when($propertyName, function ($query, $propertyName) {
                return $query->where('property_name', 'LIKE', "%{$propertyName}%");
            })
            ->when($location, function ($query, $location) {
                return $query->where('location', 'LIKE', "%{$location}%");
            })
            ->when($propertyType, function ($query, $propertyType) {
                return $query->where('property_type', 'LIKE', "%{$propertyType}%");
            })
            ->get();

        // Pass the results to the view
        return view('results', compact('results'));
    }
}
