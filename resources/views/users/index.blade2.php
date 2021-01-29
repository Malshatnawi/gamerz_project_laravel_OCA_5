@extends('layout.users_layouts.NewfeedsLayout')
@section('title')
    Home Page
@endsection
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1580234811497-9df7fd2f357e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8Z2FtaW5nfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
            </div>
			
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1593305841991-05c297ba4575?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=953&q=80" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
   <!-- Hero section end-->
@endsection
