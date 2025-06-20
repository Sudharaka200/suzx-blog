@extends('frontend.layouts.master')

@section('content')

    <!-- Carosal -->
    <div class="container mt-5">
        <div id="carouselExampleCaptions" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 20px;">
                <div class="carousel-item active home-carousel-h">
                    <img src="frontend/images/c-img1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption home-carosal-s">
                        <div class="home-carosal-text-background">
                            <div class="home-carosal-txt-div">
                                <button class="home-carosal-txt-p">Technology</button>
                            </div>
                            <h3 class="fw-bold mt-2">The Impact of Technology on the Workplace: How Technology is
                                Changing</h3>
                            <p class="p-txt-color">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item home-carousel-h">
                    <img src="frontend/images/c-img1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption home-carosal-s">
                        <div class="home-carosal-text-background">
                            <div class="home-carosal-txt-btn">
                                <button class="home-carosal-txt-p">Technology</button>
                            </div>
                            <h3 class="fw-bold mt-2">The Impact of Technology on the Workplace: How Technology is
                                Changing</h3>
                            <p class="p-txt-color">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item home-carousel-h">
                    <img src="frontend/images/c-img1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption home-carosal-s">
                        <div class="home-carosal-text-background">
                            <div class="home-carosal-txt-btn">
                                <button class="home-carosal-txt-p">Technology</button>
                            </div>
                            <h3 class="fw-bold mt-2">The Impact of Technology on the Workplace: How Technology is
                                Changing</h3>
                            <p class="p-txt-color">Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carosal -->

    <!-- Blog Cards -->
    <div class="container mt-5">
        <h3 class="mb-3">Latest Post</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($Posts as $Post)
                
            <a href="{{ route('postsingle', $Post->id) }}">
                <div class="col">
                    <div class="card h-100">
                        <img src="frontend/images/Rectangle 38.png" class="card-img-top home-card-img" alt="...">
                        <div class="card-body">
                            <h5 class="fw-bold mt-2">{{$Post->title1}}</h5>
                            <p class="card-text p-txt-color">{{ $Post->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </a>

            @endforeach

        </div>
    </div>
    <!-- Blog Cards -->

@endsection