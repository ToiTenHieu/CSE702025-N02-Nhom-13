<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <title>Document</title>
</head>
<body>
<nav class="main-nav">
    <div class="logo">
        <img class="font" src="{{ asset('images/homestay.png') }}" alt="Sky Luxury Logo" />
        <a href= {{ route('home') }} class="logo-text">Happy </a>
    </div>
    <ul class="menu">
        <li><a href="{{ route('home') }}">TRANG CHỦ</a></li>

        <li><a href="#">VỀ CHÚNG TÔI ▾</a></li>
        <li><a href="#">PHÒNG NGHỈ ▾</a></li>
        <li><a href="#">TIN TỨC</a></li>
        <li><a href="#">LIÊN HỆ</a></li>
        <li><a href="#">ƯU ĐÃI</a></li>
    </ul>
</nav>

</body>
</html>