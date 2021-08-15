<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
    <h1>ยินดีตอนรับ</h1>
    <p>Test Larabel</p>

    <p>ที่อยู่{{$address}}</p>
    <p>เบอร์ติดต่อ{{$tel}}</p>
    <p>อีเมล{{$email}}</p>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}">Admin</a>
    <a href="{{route('member')}}">Member</a>
    <a href="{{route('about')}}">About</a>

</body>
</html>