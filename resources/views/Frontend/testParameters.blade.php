@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Test Parameters</h1>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 400px; overflow-y: auto;">
        <canvas id="testParametersChart" width="400" height="200"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from the controller
        var testParametersData = @json($testParametersData);

        var ctx = document.getElementById('testParametersChart').getContext('2d');
        var testParametersChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: testParametersData.map(data => data.parameter_name),
                datasets: [{
                    label: 'Count',
                    data: testParametersData.map(data => data.count),
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
