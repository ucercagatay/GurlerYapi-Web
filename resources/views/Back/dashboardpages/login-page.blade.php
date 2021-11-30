<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Screen</title>
</head>
<body>
<form method="POST" action="{{route('logpost')}}">
    @csrf
    <label>Mail</label> <input name="email" type="email"> <br>
    <label>Password</label> <input name="password" type="password"> <br>
    <button type="submit">Gönder</button>
</form>
</body>
</html>
