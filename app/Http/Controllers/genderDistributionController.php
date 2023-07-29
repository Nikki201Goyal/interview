<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class genderDistributionController extends Controller
{
    public function genderDistribution(){

        $genderDistribution = PatientScreening::selectRaw('gender, COUNT(*) as count')
            ->groupBy('gender')
            ->get();

        $genderDistributionByName = PatientScreening::selectRaw('name, gender, COUNT(*) as count')
            ->groupBy('name', 'gender')
            ->get();


        return view('Frontend.genderDistribution', compact('genderDistribution', 'genderDistributionByName'));
    }

}
