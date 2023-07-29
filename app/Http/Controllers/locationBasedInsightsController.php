<?php


namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class locationBasedInsightsController extends Controller
{
    public function locationBasedInsights()
    {
        // Fetch data for location-based insights
        $locationCountsByState = PatientScreening::selectRaw('ap_state, COUNT(*) as count')
            ->groupBy('ap_state')
            ->get();

        $locationCountsByDistrict = PatientScreening::selectRaw('ap_district, COUNT(*) as count')
            ->groupBy('ap_district')
            ->get();


        // Pass the data to the view
        return view('Frontend.locationBasedInsights', [
            'locationCountsByState' => $locationCountsByState,
            'locationCountsByDistrict' => $locationCountsByDistrict,
        ]);
    }

        //return view('Frontend.locationBasedInsights', compact('locationData', 'topCountriesData', 'continentDistributionData'));

}
