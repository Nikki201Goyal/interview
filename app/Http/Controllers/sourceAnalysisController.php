<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class sourceAnalysisController extends Controller
{
    public function sourceAnalysis()
    {
        $sourceData = PatientScreening::selectRaw('source, COUNT(*) as count')
            ->groupBy('source')
            ->get();

        return view('Frontend.sourceAnalysis', compact('sourceData'));
    }
}
