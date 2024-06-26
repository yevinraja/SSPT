@extends('layout')
@section('title' , 'registration')
@section('content')
    <div class="container">
        <h1>Login</h1>
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger"> {{$error}}
                            @endforeach
                        </div>

                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger"> {{session('error')}}
                                @endif

                                @if(session()->has('success'))
                                    <div class="alert alert-success"> {{session('success')}}
                                        @endif

                                    </div>
        <form action="{{route('login.post')}}" method="POST" class = "ms-auto me-auto mt-5" style="width: 500px; bottom: 10px" >
@csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
