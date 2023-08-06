<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Blood Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('category')}}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{url('login')}}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{url('register')}}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>