<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.table{
    position: absolute;
    left: 30%;
    top: 30%;
    padding: 20px50px;
    width: 300px;
}
.table1{
    position: absolute;
    left: 30%;
    top: 35%;
    padding: 20px50px;
    width: 300px;
}
.create{
    position: absolute;
    left: 30%;
    top: 45%;
}
</style>
</head>
<body>
    <h1>Edit Data User</h1>
    <div>
        <form action="{{url('updatedata',$sis->id)}}" method="post" >
            @csrf
            <div class='table'>
                <input type="text" id="username" name="username" placeholder='username' value="{{$sis->username}}">
            </div>
            <div class='table1'>
                <select id="role" name="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div>
                <button type="submit" class="create">Simpan Data</button>
            </div>
        </form>
    </div>
</body>
</html>