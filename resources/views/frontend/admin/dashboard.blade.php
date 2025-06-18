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
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger mt-2">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img class="admin-carosal-img" src="../images/c-img1.png" alt="">
                            </td>
                            <td>The Impact of Technology on the Workplace: How Technology is Changing</td>
                            <td>Some representative placeholder content for the first slide.</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img class="admin-carosal-img" src="../images/Rectangle 381.png" alt="">
                            </td>
                            <td>The Impact of Technology on the Workplace: How Technology is Changing</td>
                            <td>Some representative placeholder content for the first slide.</td>
                            <td>August 20, 2022</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger mt-2">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img class="admin-carosal-img" src="../images/Rectangle 384.png" alt="">
                            </td>
                            <td>The Impact of Technology on the Workplace: How Technology is Changing</td>
                            <td>Some representative placeholder content for the first slide.</td>
                            <td>August 20, 2022</td>
                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger mt-2">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- dashboard -->

@endsection