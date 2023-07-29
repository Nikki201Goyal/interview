<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class GeospatialInsightsController extends Controller
{
    public function geospatialInsights()
    {
        // Retrieve geospatial insights data from the database
        $geospatialData = PatientScreening::select('latitude', 'longitude', 'screening_status')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->get();

        return view('Frontend.geospatialInsights', compact('geospatialData'));
    }
}
