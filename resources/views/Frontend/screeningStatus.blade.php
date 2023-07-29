@extends('Frontend.Layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Screening Status</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="chart-container" style="position: relative; height: 300px; width: 100%;">
                    <canvas id="screeningStatusChart" width="100%" height="100%"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from the controller
        var screeningStatusData = @json($screeningStatusData);

        var ctx = document.getElementById('screeningStatusChart').getContext('2d');
        var screeningStatusChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: screeningStatusData.map(data => data.screening_status),
                datasets: [{
                    data: screeningStatusData.map(data => data.count),
                    backgroundColor: ['rgba(75, 192, 192, 0.5)', 'rgba(255, 99, 132, 0.5)', 'rgba(255, 205, 86, 0.5)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 205, 86, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'right'
                    }
                }
            }
        });
    </script>
@endsection
