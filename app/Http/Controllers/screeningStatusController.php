<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class screeningStatusController extends Controller
{
    public function screeningStatus()
    {
        $screeningStatusData = PatientScreening::selectRaw('screening_status, COUNT(*) as count')
            ->groupBy('screening_status')
            ->get();

        return view('Frontend.screeningStatus', compact('screeningStatusData'));
    }
}
