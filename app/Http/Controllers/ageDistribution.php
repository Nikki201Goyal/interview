<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class ageDistribution extends Controller
{
    public function ageGroupDistribution()
    {
        // Retrieve age group distribution data from the database
        $ageGroupDistribution = PatientScreening::selectRaw('
                CASE
                    WHEN age BETWEEN 0 AND 9 THEN "0-9"
                    WHEN age BETWEEN 10 AND 19 THEN "10-19"
                    WHEN age BETWEEN 20 AND 29 THEN "20-29"
                    WHEN age BETWEEN 30 AND 39 THEN "30-39"
                    WHEN age BETWEEN 40 AND 49 THEN "40-49"
                    WHEN age BETWEEN 50 AND 59 THEN "50-59"
                    WHEN age BETWEEN 60 AND 69 THEN "60-69"

                    -- Add more age groups as needed
                    ELSE "70+"
                END as age_group,
                COUNT(*) as count
            ')
            ->groupBy('age_group')
            ->orderBy('age_group')
            ->get();

        // Pass the data to the view
        return view('Frontend.ageGroupDistribution', compact('ageGroupDistribution'));
    }
}
