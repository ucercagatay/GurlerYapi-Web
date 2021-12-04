<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Geçici İletişim Formu Test İçin</h1>
<form method="post" action="{{route('formPost')}}">
    @csrf
    <label>İsim</label> <input type="text" name="name"> <br>
    <label>Soyisim</label> <input name="surname" type="text"><br>
    <label>Email</label> <input type="email" name="email"><br>
    <label>Telefon Numarası</label> <input type="number" name="phoneNumber"> <br>
    <label>Bilgi Almak İstenen Konu</label> <select name="option">
        <option value="Kategori1">Kategori adı</option>
        <option value="Kategori2">Kategori adı 2 </option>
        <option value="Kategori3">Kategori adı 3</option>
    </select> <br>
    <label>Mesajınız/İletmek İstediğiniz Konu</label>
    <textarea name="message"></textarea> <br>
        <button type="submit">Gönder</button> <br>
</form>
</body>
</html>
