@extends('layouts.master')
@section('title')
    Quack
@endsection
@section('content')
<div class="container">
                <div class="card text-white bg-dark m-3">
                    <div class="card-header">
                        {{$quack->user->firstName}} {{$quack->user->lastName}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$quack->title}}</h5>
                        <p class="card-text">{{$quack->text}}</p>
                        <p><cite>Posted on {{$quack->created_at}}</cite></p>
                    </div>
                </div>
            </div>
@endsection