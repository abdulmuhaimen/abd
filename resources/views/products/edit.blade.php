<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
     <form action="/edit/{{$pr->id}}" method="POST">
         @csrf

        product name: <input type="text" name="name" placeholder="Enter name" value="{{$pr->name}}">
        <br>
        product price: <input type="text" name="price" placeholder="Enter price" value="{{$pr->price}}">
        <br>
        <input type="submit" value="Edit">

     </form>
</body>
</html>
