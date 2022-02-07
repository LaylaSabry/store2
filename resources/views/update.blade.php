<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>update Category page</p>
    <form method="get" action="{{  ('/edite') }}">
       <input name="id" type="hidden" value="{{$categories['id']}}">
        Name: <input type="text" name="name"value="{{$categories['name']}}">
        <button>Submit</button>
    </form>
</body>
</html>