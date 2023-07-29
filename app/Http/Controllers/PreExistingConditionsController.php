<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class PreExistingConditionsController extends Controller
{
    public function preExistingConditions()
    {
        $preExistingConditionsData = PatientScreening::selectRaw('
                CASE
                    WHEN ph_diabetic = "Y" THEN "Diabetic"
                    WHEN ph_hypertension = "Y" THEN "Hypertension"
                    WHEN ph_hypercholesterolemia = "Y" THEN "Hypercholesterolemia"
                    -- Add more conditions as needed
                    ELSE "None"
                END as condition_name,
                COUNT(*) as count
            ')
            ->groupBy('condition_name')
            ->get();

        return view('Frontend.preExistingConditions', compact('preExistingConditionsData'));
    }
}
