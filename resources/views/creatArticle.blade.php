<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>Create article page</p>
    <form method="POST" action="{{  route('article.save') }}">
    @csrf
        Name: <input type="text" name="name">
        category_id: <input type="number" name="category_id">
        details: <input type="text" name="details">
        is_used: <input type="number" name="is_used">
        slug: <input type="text" name="slug">




        <button>Submit</button>
    </form>
</body>
</html>