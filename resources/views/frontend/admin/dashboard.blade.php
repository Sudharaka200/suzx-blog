@extends('frontend.adminlayout.adminmaster')

@section('content')

    <!-- dashboard -->
    <div class="container">
        <h3>Dashbaord</h3>

        <div class="">
            <h5>Slide Menu Images</h5>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img class="admin-carosal-img" src="../images/c-img1.png" alt="">
                            </td>
                            <td>The Impact of Technology on the Workplace: How Technology is Changing</td>
                            <td>Some representative placeholder content for the first slide.</td>
                            <td>
                                <button class="btn btn-primary">Edit</button> <br>
                                <button class="btn btn-danger mt-2">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h5>Blog Post</h5>
            <a href="{{ url('/addNewPost') }}">
                <button class="btn btn-primary mt-2 mb-4">Add New Blog</button>
            </a>
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Posts as $Post)

                            <tr>
                                <th scope="row">{{ $Post->id }}</th>
                                <td>
                                    <img class="admin-carosal-img" src="{{asset('frontend/images/Rectangle 381.png') }}"
                                        alt="">
                                </td>
                                <td>{{ $Post->title1 }}</td>
                                <td>{{ $Post->description1 }}</td>
                                <td>{{ $Post->created_at }}</td>
                                <td>
                                    <a href="{{ route('updateForm', $Post->id) }}" class="btn btn-primary">Edit</a> <br>
                                    <form action="{{ route('post.delete', $Post->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mt-2">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- dashboard -->

@endsection