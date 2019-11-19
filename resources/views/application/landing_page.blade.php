@extends('layouts.landingpageMaster')
@section('title')
    Welcome!
@endsection
@section('content')
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Welcome to Quackers</h4>
              <p>Want to be updated on the latest on Science and Technology? <br>
                Join SciQuack! </p>
              <a href="{{ route('user.signup') }}">Register</a> 
              <a href="{{ route('user.login') }}">Login</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="http://www.stickpng.com/assets/images/580b57fbd9996e24bc43be15.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container-fluid mt-5 pt-5">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Quack of the Day</h4>
              <br>
              @foreach($randomQuacks as $randomQuack)
              <h5>{{$randomQuack->user->firstName}} {{$randomQuack->user->lastName}}</h5> 
              <p>"{{$randomQuack->text}}"</p>
              <br>
              <a href="{{route('application.quack', ['id' => $randomQuack->id]) }}">Go to Quack</a>
              @endforeach
              </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://images.csmonitor.com/csm/2018/02/1056044_1_granlund%20on%20Tesla_standard.png?alias=standard_900x600" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end--> 
@endsection

