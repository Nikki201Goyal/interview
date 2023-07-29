<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class AbnormalScreeningAnalysisController extends Controller
{
    public function abnormalScreeningAnalysis()
    {
        $abnormalScreeningData = PatientScreening::selectRaw('abnormal_screening, COUNT(*) as count')
            ->groupBy('abnormal_screening')
            ->get();


        return view('Frontend.abnormalScreeningAnalysis', compact('abnormalScreeningData'));
    }
}
