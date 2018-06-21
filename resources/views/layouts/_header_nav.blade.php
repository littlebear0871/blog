<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="container collapse navbar-collapse offset-md-2 " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active pl-5">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pl-5">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown pl-5">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item pl-5">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>


    <ul class="navbar-nav float-right">
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="{{route('signup')}}" class="nav-link">Sign Up</a></li>
    </ul>
  </div>
</nav>
