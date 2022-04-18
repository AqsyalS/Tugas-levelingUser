<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <div>
        <h1>Ini adalah halaman admin</h1>
        <table border='2'>
            <tr>
                <th>Username</th>
                <th>email</th>
                <th>role</th>
                <th>Delete</th>
            </tr>
            @foreach($datauser as $item)
            <tr>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->role}}</td>
                <td><a href="{{url('edit',$item->id)}}">Edit</a> | 
                <a href="/deletedata/{{$item->id}}">Delete    </a></td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>