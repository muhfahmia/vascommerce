@extends('layout.layout')
 
@section('title', 'Login Page')
 
@section('content')
    <div class="col-md-6 offset-md-3 shadow p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="text-center">
            <h6>Login Form</h6>
        </div>
        <form method="POST" action="{{url('loginPost')}}">
            @csrf
            <div class="form-group p-3">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') }}">
            </div>
            <div class="form-group p-3">
                <label for="phone">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
              </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
    </div>
@stop
 