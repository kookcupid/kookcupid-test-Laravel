<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>
<body>

    <?php

    $user ="Natthapon";
    $arr = array("Home","Member","About","Contact");

    ?>

    @if($user =="Natthapon")
        <h1>ยินดีตอนรับ Admin{{@user}}</h1>
        <p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
        <h1>{{$user}}</h1>
    @else
        <p>ผู้ใช้ท่านนี้ไม่ได้เป็น Admin</p>
    @endif

    @foreach($arr as $menu)
        <a href="">{{$menu}}</a>
    @endforeach

    <ul>
    @for($i=1;$i<=10;$i++)
        <li?>{{$i}}</li>
    @endfor
    </ul>

</body>
</html>
