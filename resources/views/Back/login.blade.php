<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

</head>
<body>
<form method="post" action="{{route('logpost')}}">
    <div class="login-body">
        @csrf
        <div class="login-modal">
            <div>
                <img src="{{asset("images/s2.png")}}" alt="">
            </div>
            <div>
                <input name="email" class="check-mail" type="email">
                <label for="">E-Posta</label>
            </div>
            <div>
                <input name="password" class="check-password" type="password">
                <label for="">Şifre</label>
            </div>
            <button type="submit" href="">Oturumu Aç</button>
            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(window).keyup(function(e)
    {
        if($(".check-mail").val()){
            $(".check-mail+label").addClass("inputhover")
        }
        else {
            $(".check-mail+label").removeClass("inputhover")
        }

        if($(".check-password").val()){
            $(".check-password+label").addClass("inputhover")
        }
        else {
            $(".check-password+label").removeClass("inputhover")
        }
    });
</script>
</html>

