<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body >

<h1>Create</h1>
<form action="" method="post" >
    {{csrf_field()}}
    <input type="text" name="name">
    <button type="submit"> Tạo </button>
</form>
</body>
</html>
