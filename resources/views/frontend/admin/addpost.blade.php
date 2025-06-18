@extends('frontend.adminlayout.adminmaster')

@section('content')

    <div class="container">
        <h3>Add New Post</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="text" name="img_url1" class="form-control" id="img_url1" value="{{ old('img_url1') }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title1" class="form-control" id="title1" value="{{ old('title1') }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="textarea" name="description1" class="form-control" id="description" value="{{ old('description1') }}" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>

@endsection