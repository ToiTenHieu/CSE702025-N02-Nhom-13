<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết phòng {{ $room->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/room.css') }}">
</head>
<body>
    <h1>{{ $room->name }}</h1>
    <p>Thành phố: {{ $room->city }}</p>
    <p>Giá: {{ number_format($room->price, 0, ',', '.') }} đ / ngày</p>

    <h3>Ảnh phòng:</h3>
    <div class="image-gallery">
        @foreach ($room->images as $image)
            <img src="{{ asset($image->image_path) }}" alt="Ảnh phòng {{ $room->name }}">
        @endforeach
    </div>

    <h3>Giới thiệu chi tiết:</h3>
    <p>{{ $room->describe ?? 'Chưa có mô tả chi tiết' }}</p>
</body>
</html>
