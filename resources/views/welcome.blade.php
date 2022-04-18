<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.submit {
    position: absolute;
    top: 95%;
    width: 100%;
    padding: 5px 2px;
    border: none;
    background-color:#FF0000;
    font-size: 20px;
    color: #fff;
  }
    .title {
    color: #fff;
    text-align:center;
    position: absolute;
    left: 50%;
    top: 10%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background: #FF0000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.leveling{
    color: #fff;
    text-align:center;
    position: absolute;
    left: 50%;
    top: 30%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background: #FF0000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

    </style>
</head>
<body>

    <div class='leveling'>
        <ul>
        <li>
            <a href="/admin">Halaman Admin</a>
        </li>
        <li>
            <a href="/user">Halaman User</a>
        </li>
    </ul>
    </div>
    <div class="title">
			<h1 class='title'>Welcome {{ auth()->user()->username }}</h1>
		</div>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class='submit'>Log out</button>
        </form>
</body>
</html>