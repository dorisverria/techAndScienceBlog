@extends('layouts.master')
@section('title')
    Sci Quack
@endsection
@section('content')
<h1>Welcome to SciQuack</h1>
<div class="row">
    <div class="col-sm-9">
        @foreach($quacks as $quack)
        <div class="row">
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
        </div>
        @endforeach
    </div>
    <div class="col-sm-3">
            <div class="container">
                <div class="card text-white bg-dark m-3">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body text-center">
                        @foreach($randomQuacks as $randomQuack)
                        <a href="{{ route('application.quack', ['id' => $randomQuack->id]) }}" class="sidebar"><div class="row m-2">
                        <h6 class="card-title">{{$randomQuack->title}}</h6>
                        </div></a>
                        @endforeach                                
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection