@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Location-Based Insights</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Screenings by State</h2>
                        <canvas id="locationByStateChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2>Screenings by District</h2>
                        <canvas id="locationByDistrictChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Load Chart.js library
        document.addEventListener('DOMContentLoaded', function () {
            // Data from the controller for location-based charts
            var locationByStateData = @json($locationCountsByState);
            var locationByDistrictData = @json($locationCountsByDistrict);

            // Extract labels and counts for State chart
            var stateLabels = locationByStateData.map(data => data.ap_state);
            var stateCounts = locationByStateData.map(data => data.count);

            // Extract labels and counts for District chart
            var districtLabels = locationByDistrictData.map(data => data.ap_district);
            var districtCounts = locationByDistrictData.map(data => data.count);

            // Create the location charts
            var locationByStateChart = new Chart(document.getElementById('locationByStateChart'), {
                type: 'line',
                data: {
                    labels: stateLabels,
                    datasets: [{
                        label: 'Number of Screenings',
                        data: stateCounts,
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }
                }
            });

            var locationByDistrictChart = new Chart(document.getElementById('locationByDistrictChart'), {
                type: 'line',
                data: {
                    labels: districtLabels,
                    datasets: [{
                        label: 'Number of Screenings',
                        data: districtCounts,
                        fill: false,
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }
                }
            });
        });
    </script>

@endsection
