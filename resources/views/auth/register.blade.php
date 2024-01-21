@extends('layout.layout')
 
@section('title', 'Register Page')
 
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
            <h6>Register Form</h6>
        </div>
        <form method="POST" action="{{url('registerPost')}}">
            @csrf
            <div class="form-group p-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ old('name') }}">
              </div>
            <div class="form-group p-3">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') }}">
            </div>
            <div class="form-group p-3">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone" value="{{old('phone')}}">
              </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
@stop
 