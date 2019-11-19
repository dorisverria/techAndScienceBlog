<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <a class="navbar-brand" href="#">SciQuack</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('application.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('application.myQuacks') }}">Views</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('application.createQuack') }}">Create</a>
      </li>
      </ul>
      <ul class="navbar-nav mr-5">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.getList') }}">Registered Users</a>
      </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> 
            User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if(Auth::check())
              <a class="dropdown-item" href="{{ route('user.logout') }}">Log out</a>
              @else
              <a class="dropdown-item" href="{{ route('user.signup') }}">Sign up</a>
              <a class="dropdown-item" href="{{ route('user.login') }}">Log in</a>
              @endif
            </div>
        </li>
        </ul>
  </div>
</nav>