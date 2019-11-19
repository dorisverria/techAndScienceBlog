@extends('layouts.master')
@section('title')
    Personal Quacks
@endsection
@section('content')
<h1>My Quacks</h1>
<div class="row">
    <div class="col">
        @foreach($quacks as $quack)
        <!-- Modal -->
<div class="modal fade" id="deleteModal{{$quack->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete quack {{$quack->id}}?</p>
      </div>
      <div class="modal-footer">
      <form method="POST" action="{{ route('application.deleteQuack') }}">
      {{ csrf_field() }}
          <input type="hidden" name="quackID" id="quackID" value="{{$quack->id}}"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Delete</button>
</form>
      </div>
    </div>
  </div>
</div>
        <div class="row">
            <div class="container">
                <div class="card text-white bg-dark m-3">
                    <div class="card-header">
                        {{$quack->id}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$quack->title}}</h5>
                        <p class="card-text">{{$quack->text}}</p>
                        <p><cite>Posted on {{$quack->created_at}}</cite></p>
                        <a href="{{route('application.editQuack', ['id' => $quack->id]) }}" class="btn btn-primary m-2"><i class="fas fa-edit"></i> Edit </a>
                        <a href="#" class="btn btn-danger m-2" data-toggle="modal" data-target="#deleteModal{{$quack->id}}"><i class="fas fa-trash-alt"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection