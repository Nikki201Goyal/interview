@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Node-Wise Insights</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="chart-container" style="position: relative; height: 40vh; width: 80vw;">
        <canvas id="nodeWiseInsightsChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data from the controller
        var nodeData = @json($nodeData);

        // Extract node IDs and AP names from the data
        var nodeIds = nodeData.map(data => data.node_id);
        var apNames = nodeData.map(data => data.ap_name);
        var counts = nodeData.map(data => data.count);

        var ctx = document.getElementById('nodeWiseInsightsChart').getContext('2d');
        var nodeWiseInsightsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: nodeIds.map((id, index) => `${id} - ${apNames[index]}`),
                datasets: [{
                    label: 'Count',
                    data: counts,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
