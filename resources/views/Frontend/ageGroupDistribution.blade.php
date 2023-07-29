@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Age Group Distribution</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Chart.js Chart Container -->
                        <canvas id="ageGroupChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Load Chart.js library
        document.addEventListener('DOMContentLoaded', function () {
            // Data from the controller
            var ageGroupData = @json($ageGroupDistribution);

            // Extract labels and counts from data
            var labels = ageGroupData.map(data => data.age_group);
            var counts = ageGroupData.map(data => data.count);

            // Create the age group distribution chart
            new Chart(document.getElementById('ageGroupChart'), {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Screenings',
                        data: counts,
                        fill: false,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
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
