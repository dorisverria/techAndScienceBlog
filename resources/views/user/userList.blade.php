@extends('layouts.master')
@section('title')
    Registered Users
@endsection
@section('content')
<h1>Registered Users</h1>
<hr>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user) 
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->firstName}}</td>
      <td>{{$user->lastName}}</td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection