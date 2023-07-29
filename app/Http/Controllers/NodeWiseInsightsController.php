<?php

namespace App\Http\Controllers;

use App\Models\PatientScreening;
use Illuminate\Http\Request;

class NodeWiseInsightsController extends Controller
{

  public function nodeWiseInsights()
  {
      // Retrieve data for node-wise insights
      $nodeData = PatientScreening::selectRaw('node_id, ap_name, COUNT(*) as count')
          ->groupBy('node_id', 'ap_name')
          ->orderBy('count', 'desc')
          ->get();


      return view('Frontend.nodeWiseInsights', compact('nodeData'));
  }
}
