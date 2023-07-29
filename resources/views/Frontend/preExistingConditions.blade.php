@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pre-Existing Conditions</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-container" style="position: relative; height: 400px; width: 80vw;">
        <canvas id="preExistingConditionsChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from the controller
        var preExistingConditionsData = @json($preExistingConditionsData);

        var ctx = document.getElementById('preExistingConditionsChart').getContext('2d');
        var preExistingConditionsChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: preExistingConditionsData.map(data => data.condition_name),
                datasets: [{
                    data: preExistingConditionsData.map(data => data.count),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)', // Diabetic
                        'rgba(75, 192, 192, 0.5)',  // Hypertension
                        'rgba(255, 205, 86, 0.5)',  // Hypercholesterolemia
                        'rgba(123,234,9,0.5)',  // none

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(123,234,9,0.5)',
                    ],
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
