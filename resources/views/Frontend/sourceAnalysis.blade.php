@extends('Frontend.Layouts.master')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Source Analysis (Pie Chart)</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <canvas id="sourceChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data from the controller
    var sourceData = @json($sourceData);

    // Extract labels (sources) and counts
    var labels = sourceData.map(data => data.source);
    var counts = sourceData.map(data => data.count);

    // Create a pie chart
    var ctx = document.getElementById('sourceChart').getContext('2d');
    var sourceChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: counts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    // Add more colors as needed for additional sources
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // Add more colors as needed for additional sources
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection


{{--@extends('Frontend.Layouts.master')--}}
{{--@section('content')--}}

{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0">Source Analysis</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <canvas id="sourceChart" width="400" height="200"></canvas>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>--}}
{{--    <script>--}}
{{--        // Data from the controller--}}
{{--        var sourceData = @json($sourceData);--}}

{{--        var ctx = document.getElementById('sourceChart').getContext('2d');--}}
{{--        var sourceChart = new Chart(ctx, {--}}
{{--            type: 'bar',--}}
{{--            data: {--}}
{{--                labels: sourceData.map(data => data.source),--}}
{{--                datasets: [{--}}
{{--                    label: 'Source Analysis',--}}
{{--                    data: sourceData.map(data => data.count),--}}
{{--                    backgroundColor: 'rgba(54, 162, 235, 0.5)',--}}
{{--                    borderColor: 'rgba(54, 162, 235, 1)',--}}
{{--                    borderWidth: 1--}}
{{--                }]--}}
{{--            },--}}
{{--            options: {--}}
{{--                responsive: true,--}}
{{--                scales: {--}}
{{--                    x: {--}}
{{--                        beginAtZero: true,--}}
{{--                        title: {--}}
{{--                            display: true,--}}
{{--                            text: 'Source'--}}
{{--                        }--}}
{{--                    },--}}
{{--                    y: {--}}
{{--                        beginAtZero: true,--}}
{{--                        title: {--}}
{{--                            display: true,--}}
{{--                            text: 'Count'--}}
{{--                        }--}}
{{--                    }--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

{{--@endsection--}}
