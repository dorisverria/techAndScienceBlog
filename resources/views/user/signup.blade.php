@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-4 m-auto">
    <h1>Sign Up</h1>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
    </div>
    @endif
    <form action="{{route('user.signup')}}" method="post">
    <div class="form group">
        <label for="firstName">First Name:</label>
        <input type="firstName" id="firstName" name="firstName" value="{{ old('firstName')}}" class="form-control">
      </div>
      <div class="form group">
        <label for="lastName">Last Name:</label>
        <input type="lastName" id="lastName" name="lastName" value="{{ old('lastName')}}" class="form-control">
      </div>
      <div class="form group">
        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control">
      </div>
      <div class="form group mb-2">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
      {{csrf_field()}}
    </form>
  </div>
</div>
@endsection
