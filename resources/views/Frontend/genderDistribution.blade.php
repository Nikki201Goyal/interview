@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gender Distribution</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- First Chart: Gender Chart -->
                        <canvas id="genderChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Second Chart: Gender Distribution Chart -->
                        <canvas id="genderDistributionChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // First Chart: Gender Chart
        document.addEventListener('DOMContentLoaded', function () {
            // Data from the controller
            var genderData = @json($genderDistribution);

            // Extract labels and counts from data
            var labels = genderData.map(data => data.gender);
            var counts = genderData.map(data => data.count);

            // Create the gender chart
            new Chart(document.getElementById('genderChart'), {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Gender Distribution',
                        data: counts,
                        backgroundColor: ['rgba(54, 162, 235, 0.5)', 'rgba(255, 99, 132, 0.5)'], // Add more colors if needed
                        borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1
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

        // Second Chart: Gender Distribution Chart
        document.addEventListener('DOMContentLoaded', function () {
            // Data from the controller
            var genderDistributionData = @json($genderDistributionByName);

            // Extract names and genders from the data
            var names = genderDistributionData.map(data => data.name);
            var genders = genderDistributionData.map(data => data.gender);
            var counts = genderDistributionData.map(data => data.count);

            var ctx = document.getElementById('genderDistributionChart').getContext('2d');
            var genderDistributionChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: names,
                    datasets: [{
                        label: 'Male',
                        data: counts.filter((count, index) => genders[index] === 'Male'),
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Female',
                        data: counts.filter((count, index) => genders[index] === 'Female'),
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            });
        });
    </script>

@endsection
