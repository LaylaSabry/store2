<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 ">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/create">CREATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="CREATE NEW CATEGORY....." aria-label="Search">
        <button class="btn btn-outline-success" type="/create">test </button>
      </form>
    </div>
  </div>
</nav>
<br>
 <center> 
 <h1><a class="nav-link active" aria-current="page" href="/create">CREATE New Category..............</a></h1>

 @foreach ($categories as $category)
  
  <div class="card bg-secondary" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">{{ $category-> name }}</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="{{ ('/article/'.$category['id']) }}" class="btn btn-success">See Articles </a>
      <!-- <a href=  "{{('delete/' .$category['id'])}}" class="btn btn-danger">
      @method('DELETE')
      Delete Category </a> -->
      <a href=  "{{('update/' .$category-> id )}}" class="btn btn-info">
        
      update Category </a>

      <form method="post" action="{{('delete/' .$category['id'])}}">
      @csrf
    @method('delete')
        
        <button class="btn btn-danger">delete</button>
    </form>

    </div>
  </div>
  <br>
  @endforeach






  
</center>
</div>

</body>
</html>
