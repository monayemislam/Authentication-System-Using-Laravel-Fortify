@extends('auth_layout.auth_master')
@section('title','Login')
@section('content')


<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <form class="col-5" action="{{ route('login') }}" method="post">
           @csrf
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
            <input type="password" class="form-control" name="password" placeholder="Enter password">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Remember me
            </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <button type="submit" class="btn btn-success btn-sm">Login </button>
            <span><a href="{{ route('register') }}">Don't have an account?</a></span>
            </div>
        </div>
    </form>
</div>
</div>


@endsection