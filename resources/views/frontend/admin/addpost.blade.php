@extends('frontend.adminlayout.adminmaster')

@section('content')

    <div class="container">
        <h3>Add New Post</h3>

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>

@endsection