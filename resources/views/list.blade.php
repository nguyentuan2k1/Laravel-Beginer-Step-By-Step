<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .th-class{
           text-align: center;
            width: 25%;
        }
    </style>
</head>
<body >
<h1 style="text-align: center"> List <a href="/create"><button >Tạo Thêm công việc</button></a> </h1>
<table style="width: 100%">

    <tr >
        <th class="th-class"> Work </th>
        <th class="th-class"> created date </th>
        <th class="th-class"> update data </th>
        <th class="th-class"> Action </th>
    </tr>
    @foreach($data as $todo)
        <tr>
            <td class="th-class"> {{$todo->name}} </td>
            <td class="th-class"> {{$todo->created_at}} </td>
            <td class="th-class"> {{$todo->updated_at}} </td>
            <td class="th-class">
                <a  href=" /edit/{{$todo->id}}"> <button>Edit</button> </a>
                <a  href=" /delete/{{$todo->id}}"> <button >Delete</button> </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
