@extends('Frontend.Layouts.master')
@section('content')

    <style>
        /* Add custom CSS to make the image take up full viewport height and width */
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        .img-container {
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-container img {
            width: 80%;
            height: 80%;
            object-fit: cover;
        }
    </style>

    <!-- Add the image for the hospital -->
    <div class="img-container">
        <img src="{{ asset('Backend/img/hospital.webp') }}" alt="Hospital Image" class="img-fluid">
    </div>

@endsection
