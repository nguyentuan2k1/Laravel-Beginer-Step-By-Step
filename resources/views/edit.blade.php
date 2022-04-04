<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body >

    <h1>Edit</h1>
    <form action="/update/{{$todo->id}}" method="post" >
        {{csrf_field()}}
        <input type="text" name="name" value="{{$todo->name}}" >
        <button type="submit"> Sửa</button>
    </form>
</body>
</html>
