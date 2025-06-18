@extends('frontend.adminlayout.adminmaster')

@section('content')

    <div class="container">
        <h3>Update Post</h3>

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
        <form action="{{ route('post.update', $Post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="text" name="img_url1" class="form-control" value="{{ $Post->img_url1 }}" id="img_url1"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title1" class="form-control" value="{{ $Post->title1 }}" id="title1"  aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="textarea" name="description1" class="form-control" value="{{ $Post->description1 }}" id="description"  aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

@endsection