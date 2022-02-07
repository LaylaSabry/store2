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

<div class="container mt-3">
  <h2>Articles Table</h2>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>slug</th>
        <th>action</th>

      </tr>
    </thead>
    <tbody>
    <h1><a class="nav-link active" aria-current="page" href="/createArticle">CREATE New Category..............</a></h1>

    @foreach ($articls as $articl)
  <tr>
    <td>{{ $articl->id }}</td>
    <td>{{ $articl-> name }}</td>

    <td>{{ $articl-> slug }}</td>
    <td> 
     <a href="{{ ('/details/'.$articl['id']) }}" class="btn btn-success"> detalis </a>
<br>

      <a href=  "{{('/updateArticle/' .$articl-> id )}}" class="btn btn-info">
        
        update </a> 
         <form method="post" action="{{('/deleteArticle/' .$articl['id'])}}">
      @csrf
    @method('delete')
        
        <button class="btn btn-danger">delete</button>
    </form>
  </td>
  </tr>
  @endforeach
    </tbody>
  </table>
</div>

</body>
</html>


</table>






  
</center>
</div>

</body>
</html>
