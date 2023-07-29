<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class TestParameterController extends Controller
{
    public function testParameters()
    {
        $testParametersData = PatientScreening::selectRaw('test_done as parameter_name, COUNT(*) as count')
            ->whereNotNull('test_done')
            ->groupBy('test_done')
            ->get();

        return view('Frontend.testParameters', compact('testParametersData'));
    }
}
