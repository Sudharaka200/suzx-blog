@extends('frontend.layouts.master')

@section('content')

    <!-- blog -->
    <div class="container">
        <div class="container singleBlog-padding">
           
            <h2 class="mt-5 fw-bold mt-2">{{ $Post->title1 }}</h2>
            <img src="../images/ImageBlog.png" alt="" class="w-100 mt-3">

            <div class="mt-3">
                <p>{{ $Post->description1 }}</p>
    
            </div>
            
        </div>
    </div>
    <!-- blog -->

@endsection