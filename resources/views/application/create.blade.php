@extends('layouts.master')
@section('title')
    Create Quack
@endsection
@section('content')
<h1>Create Quack</h1>
<div class="container bg-dark text-light p-5 m-5">
<form method="POST" action="{{ route('application.createdQuack') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title"><h5>Title:</h5></label>
    <input type="text" class="form-control" name='title' id="title" placeholder="Quack Title" required>
  </div>
  <div class="form-group">
    <label for="content"><h5>Content:</h5></label>
    <textarea class="form-control" name='content' id="content" rows="3" required></textarea>
  </div>
  <hr>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>
</div>
@endsection