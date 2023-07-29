@extends('Frontend.Layouts.master')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Geospatial Insights</h1>
                </div>
            </div>
        </div>
    </div>

    @if(count($geospatialData) > 0)
        <div id="map" style="height: 500px;"></div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Load Leaflet library
            document.addEventListener('DOMContentLoaded', function () {
                // Data from the controller
                var geospatialData = @json($geospatialData);

                // Filter out data points with null latitude or longitude
                var filteredData = geospatialData.filter(data => data.latitude !== null && data.longitude !== null);

                // Check if there is any valid geospatial data
                if (filteredData.length > 0) {
                    // Create a map centered at the first location (you can choose a default center)
                    var map = L.map('map').setView([filteredData[0].latitude, filteredData[0].longitude], 5);

                    // Add the tile layer (replace 'your_mapbox_access_token' with your actual Mapbox access token)
                    // ...

                    // Add markers for each location with a popup displaying the screening status
                    filteredData.forEach(function (data) {
                        var marker = L.marker([data.latitude, data.longitude]).addTo(map);
                        var status = data.screening_status === 'Y' ? 'Screened' : 'Not Screened';
                        marker.bindPopup('Screening Status: ' + status);
                    });
                } else {
                    // Display a message when there is no valid geospatial data
                    var mapContainer = document.getElementById('map');
                    mapContainer.innerHTML = '<p>No geospatial data available.</p>';
                }
            });
        </script>
    @else
        <p>No geospatial data available.</p>
    @endif

@endsection
