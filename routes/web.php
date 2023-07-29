<?php

use App\Http\Controllers\AbnormalScreeningAnalysisController;
use App\Http\Controllers\ageDistribution;
use App\Http\Controllers\genderDistributionController;
use App\Http\Controllers\GeospatialInsightsController;
use App\Http\Controllers\locationBasedInsightsController;
use App\Http\Controllers\NodeWiseInsightsController;
use App\Http\Controllers\PreExistingConditionsController;
use App\Http\Controllers\screeningStatusController;
use App\Http\Controllers\sourceAnalysisController;
use App\Http\Controllers\TestParameterController;
use App\Http\Controllers\UIController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UIController::class, 'index'])->name('home');
Route::get('/gender', [genderDistributionController::class, 'genderDistribution'])->name('gender');
Route::get('/age', [ageDistribution::class, 'ageGroupDistribution'])->name('age');
Route::get('/location', [locationBasedInsightsController::class, 'locationBasedInsights'])->name('location');
Route::get('/source', [sourceAnalysisController::class, 'sourceAnalysis'])->name('source');
Route::get('/screeningStatus', [screeningStatusController::class, 'screeningStatus'])->name('screeningStatus');
Route::get('/abnormalScreening', [AbnormalScreeningAnalysisController::class, 'abnormalScreeningAnalysis'])->name('abnormalScreening');
Route::get('/testParameters', [TestParameterController::class, 'testParameters'])->name('testParameters');
Route::get('/geospatialInsights', [GeospatialInsightsController::class, 'geospatialInsights'])->name('geospatialInsights');
Route::get('/nodeWiseInsight', [NodeWiseInsightsController::class, 'nodeWiseInsights'])->name('nodeWiseInsight');
Route::get('/preExistingCondition', [PreExistingConditionsController::class, 'preExistingConditions'])->name('preExistingCondition');

