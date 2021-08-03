@extends('auth_layout.auth_master')
@section('title','Sign Up')
@section('content')


<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">

    <form class="col-6" action="{{ route('register') }}" method="post">

        @if(Session::get('success'))
            <div class="alert_success">
            {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert_fail">
            {{ Session::get('fail') }}
            </div>
        @endif

        @csrf
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{ old('name') }}">
            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
            <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{ old('password') }}">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Re-type Password</label>
            <div class="col-sm-9">
            <input type="password_confirmation" class="form-control" name="password_confirmation" placeholder="Enter Password" value="{{ old('password_confirmation') }}">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
        </div>
        <button type="submit" class="button_green">Sign Up </button>
        <a href="{{ route('login') }}">I already have an account.</a>
    </form>

</div>
</div>


@endsection