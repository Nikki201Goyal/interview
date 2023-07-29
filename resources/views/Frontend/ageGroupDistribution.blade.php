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
                        <!-- Gender Filter -->
                        <label for="gender">Select Gender:</label>
                        <select id="gender">
                            <option value="all">All Genders</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <!-- Add more options for other genders if needed -->
                        </select>

                        <!-- Chart.js Chart Container -->
                        <canvas id="ageGroupChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Load Chart.js library
        document.addEventListener('DOMContentLoaded', function () {
            // Data from the controller
            var ageGroupData = @json($ageGroupDistribution);

            // Extract unique age groups and genders from data
            var ageGroups = Array.from(new Set(ageGroupData.map(data => data.age_group)));
            var genders = Array.from(new Set(ageGroupData.map(data => data.gender)));

            // Function to filter data based on the selected gender
            function filterData(selectedGender) {
                return ageGroupData.filter(data => selectedGender === 'all' || data.gender === selectedGender);
            }

            // Function to update the chart based on the selected gender
            function updateChart(selectedGender) {
                var filteredData = filterData(selectedGender);

                var counts = ageGroups.map(ageGroup => {
                    var data = filteredData.find(d => d.age_group === ageGroup);
                    return data ? data.count : 0;
                });

                ageGroupChart.data.datasets[0].data = counts;
                ageGroupChart.update();
            }

            // Create the age group distribution chart
            var ageGroupChart = new Chart(document.getElementById('ageGroupChart'), {
                type: 'line',
                data: {
                    labels: ageGroups,
                    datasets: [{
                        label: 'Number of Screenings',
                        data: [],
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

            // Initial update with all genders
            updateChart('all');

            // Add event listener for gender selection
            document.getElementById('gender').addEventListener('change', function () {
                var selectedGender = this.value;
                updateChart(selectedGender);
            });
        });
    </script>

@endsection
