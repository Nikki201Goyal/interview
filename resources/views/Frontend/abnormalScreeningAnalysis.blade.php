@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Abnormal Screening Analysis</h1>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 400px;">
        <canvas id="abnormalScreeningChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from the controller
        var abnormalScreeningData = @json($abnormalScreeningData);

        var ctx = document.getElementById('abnormalScreeningChart').getContext('2d');
        var abnormalScreeningChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: abnormalScreeningData.map(data => data.abnormal_screening === 'Y' ? 'Yes' : 'No'),
                datasets: [{
                    label: 'Count',
                    data: abnormalScreeningData.map(data => data.count),
                    backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(75, 192, 192, 0.5)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Abnormal Screening'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Count'
                        },
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
        });
    </script>

@endsection
