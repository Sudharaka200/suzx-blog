@extends('frontend.adminlayout.adminmaster')

@section('content')

    <div class="container">
        <div>
            <!-- Login Form -->
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" id="exampleInputPassword1">
                </div>
                <a href="../Admin/dashboard.html">
                    <button type="submit" class="btn btn-primary">Login</button>
                </a>
            </form>

            <a href="{{ url('/login') }}">
                <button type="submit" class="btn btn-primary">Login</button>
            </a>
            <!-- Login Form -->
        </div>
    </div>
    </div>

@endsection