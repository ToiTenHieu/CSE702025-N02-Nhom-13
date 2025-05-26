<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Sky Luxury Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>

    <div class="header-bg">
        <div class="topbar">
            <div class="topba">
                <span>
                    <i class="fas fa-map-marker-alt" style="color: black; margin-right: 5px;"></i>
                    Đầu Dịch Vụ Khu C, Tổ 7, Hà Đông, Hà Nội
                </span>

                <span>📞 0362302030</span>
            </div>

            <div class="user">
                <span>Admin123</span>
                <a href="#">ACP</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Đăng xuất</button>
        </form>
                <div class="language-wrapper">
                    <button class="language-selector">VI</button>
                    <div class="dropdown">
                        <a href="#">EN</a>
                        <a href="#">FR</a>
                        <a href="#">ZH</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-nav">
            <div class="logo">
                <img class="font" src="{{ asset('images/homestay.png') }}" alt="Sky Luxury Logo" />
                <span class="logo-text">Hotel & Resort</span>
            </div>
            <ul class="menu">
                <li><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">VỀ CHÚNG TÔI ▾</a></li>
                <li><a href="#">PHÒNG NGHỈ ▾</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
                <li><a href="#">ƯU ĐÃI</a></li>
            </ul>
        </nav>
        <div class="hero-section">
            <h1 class="hero-title">Tận hưởng trải nghiệm sang trọng</h1>
            <p class="hero-subtitle">— TRẢI NGHIỆM VỚI CHÚNG TÔI —</p>
        </div>

        <!-- Booking form -->
        <div class="booking-form">
            <div class="booking-field">
                <label>NGÀY ĐẾN</label>
                <input type="text" id="checkin-date" placeholder="Chọn ngày đến" readonly>
                <button id="confirm-checkin" style="display:none;">Xác nhận</button>
            </div>
            <div class="booking-field">
                <label>NGÀY ĐI</label>
                <input type="text" id="checkout-date" placeholder="Chọn ngày đi" readonly>
                <button id="confirm-checkout" style="display:none;">Xác nhận</button>
            </div>
            <div class="booking-field">
                <label>THÀNH PHỐ</label>
                <select>
                    <option value="">Chọn thành phố</option>
                    <option value="hanoi">Hà Nội</option>
                    <option value="hcm">TP. Hồ Chí Minh</option>
                    <option value="danang">Đà Nẵng</option>
                    <option value="nhatrang">Nha Trang</option>
                    <option value="dalat">Đà Lạt</option>
                </select>
            </div>
            <div class="booking-button">
                <button>KIỂM TRA PHÒNG TRỐNG</button>
            </div>
        </div>
    </div>
    <div class="slogan">
        <h1>Thông tin phòng nghỉ</h1>
        <img class="fontt" src="{{ asset('images/trangtri.png') }}" />
        <h2>Không gian nghỉ dưỡng đẳng cấp,<br> nơi từng chi tiết được chăm chút để tôn vinh sự tinh tế và riêng tư của bạn.</h2>
    </div>
    <h1>Nơi lưu chú tại ưu tú tại Hà Nội ></h1>
    <div class="room-container">

        <!-- PHÒNG DELUXE -->
        <!-- PHÒNG DELUXE -->
        <a href="{{ route('rooms.deluxe') }}" class="room-card">
            <img src="{{ asset('images/home1.jpg') }}" alt="Phòng Deluxe" />
            <div class="room-info">
                <h3>DELUXE SKY</h3>
                <p>500,000đ / NGÀY</p>
            </div>
        </a>

        <!-- PHÒNG FAMILY -->
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home2.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home3.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>

    </div>
    <h1>Nơi lưu chú tại thành phố Hồ Chí Minh ></h1>
    <div class="room-container">

        <!-- PHÒNG DELUXE -->
        <!-- PHÒNG DELUXE -->
        <a href="{{ route('rooms.deluxe') }}" class="room-card">
            <img src="{{ asset('images/home4.jpg') }}" alt="Phòng Deluxe" />
            <div class="room-info">
                <h3>DELUXE SKY</h3>
                <p>500,000đ / NGÀY</p>
            </div>
        </a>

        <!-- PHÒNG FAMILY -->
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home5.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home6.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>

    </div>

    <h1>Nơi lưu chú tại thành phố Đà Lạt ></h1>
    <div class="room-container">

        <!-- PHÒNG DELUXE -->
        <!-- PHÒNG DELUXE -->
        <a href="{{ route('rooms.deluxe') }}" class="room-card">
            <img src="{{ asset('images/home7.jpg') }}" alt="Phòng Deluxe" />
            <div class="room-info">
                <h3>DELUXE SKY</h3>
                <p>500,000đ / NGÀY</p>
            </div>
        </a>

        <!-- PHÒNG FAMILY -->
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home8.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home9.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>

    </div>
    <h1>Nơi lưu chú tại thành phố Đà Nẵng ></h1>
    <div class="room-container">

        <!-- PHÒNG DELUXE -->
        <!-- PHÒNG DELUXE -->
        <a href="{{ route('rooms.deluxe') }}" class="room-card">
            <img src="{{ asset('images/home10.jpg') }}" alt="Phòng Deluxe" />
            <div class="room-info">
                <h3>DELUXE SKY</h3>
                <p>500,000đ / NGÀY</p>
            </div>
        </a>

        <!-- PHÒNG FAMILY -->
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home11.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home12.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>

    </div>
    <h1>Nơi lưu chú tại thành phố Nha Trang></h1>
    <div class="room-container">

        <!-- PHÒNG DELUXE -->
        <!-- PHÒNG DELUXE -->
        <a href="{{ route('rooms.deluxe') }}" class="room-card">
            <img src="{{ asset('images/home13.jpg') }}" alt="Phòng Deluxe" />
            <div class="room-info">
                <h3>DELUXE SKY</h3>
                <p>500,000đ / NGÀY</p>
            </div>
        </a>

        <!-- PHÒNG FAMILY -->
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home14.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>
        <a href="{{ route('rooms.family') }}" class="room-card">
            <img src="{{ asset('images/home15.jpg') }}" alt="Phòng Family" />
            <div class="room-info">
                <h3>FAMILY</h3>
                <p>400,000đ / NGÀY</p>
            </div>
        </a>

    </div>

    <div class="about-section">
        <div class="about-text">
            <h2>Về chúng tôi</h2>
            <hr>
            <p>
                Muối tồn tại ở mọi nơi trên Trái đất và muối từ biển chiếm tỷ lệ lớn nhất. Thương hiệu Sky Luxury Hotel & Resort được lấy cảm hứng từ những hạt muối biển tinh khiết và giá trị bất tận của nó trong bề dày lịch sử của nhân loại. Từ xưa, muối là mặt hàng đầu tiên dùng để trao đổi thực phẩm và trở thành phương thức tiền tệ quan trọng trong cuộc sống của người dân thời đó.
            </p>
            <p>
                Hầu hết mọi người đều nghĩ rằng muối đơn giản chỉ là gia vị trong hầu hết các bữa ăn, nhưng không thể phủ nhận, muối là một phần thiết yếu trong cuộc sống không chỉ của con người mà cả thiên nhiên. Muối được xem là một trong những phương pháp hiệu quả nhất và được sử dụng rộng rãi để bảo quản thực phẩm, trị liệu spa và chăm sóc sức khỏe. Ngày nay, một món quà từ muối là một biểu tượng của sự may mắn, phong phú, chân thành và hài hòa…
            </p>
            <button>Xem thêm</button>
        </div>

        <div class="about-images">
            <img class="img-main" src="{{ asset('images/resort1.jpg') }}" />
            <img class="img-middle" src="{{ asset('images/resort2.jpg') }}" />
            <img class="img-top" src="{{ asset('images/spa.jpg') }}" />

        </div>
    </div>
    <!-- Thêm Font Awesome vào <head> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <section class="service-section">
        <div class="service-item">
            <a href="/phong-nghi-lon">
                <i class="fas fa-bed"></i>
                <p>PHÒNG NGHỈ LỚN</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/view-bien">
                <i class="fas fa-water"></i>
                <p>VIEW BIỂN TỪ BAN CÔNG</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/spa">
                <i class="fas fa-spa"></i>
                <p>HỒ BƠI & SPA</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/wifi">
                <i class="fas fa-wifi"></i>
                <p>PHỦ SÓNG WIFI</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/dich-vu-mo-rong">
                <i class="fas fa-bell-concierge"></i>
                <p>DỊCH VỤ MỞ RỘNG</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/don-dep-hang-ngay">
                <i class="fas fa-broom"></i>
                <p>DỌN DẸP MỖI NGÀY</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/buffet-sang">
                <i class="fas fa-utensils"></i>
                <p>BUFFET BỮA SÁNG</p>
            </a>
        </div>
        <div class="service-item">
            <a href="/dua-don-san-bay">
                <i class="fas fa-taxi"></i>
                <p>ĐƯA ĐÓN TỪ SÂN BAY</p>
            </a>
        </div>
    </section>
    <section class="testimonial-section">
  <div class="testimonial-container">
  <button class="arrow left" onclick="prevSlide()">&#10094;</button>
<button class="arrow right" onclick="nextSlide()">&#10095;</button>

    <!-- Slide 1 -->
    <div class="testimonial-slide active">
      <img src="{{ asset('images/beach.jpg') }}" alt="Ảnh khách hàng 1" class="testimonial-avatar" />
      <p class="testimonial-text">
        “Đây là một nơi tuyệt vời ngay trên một bãi biển cát trắng yên tĩnh...”
      </p>
      <h3 class="testimonial-name">Phil Tritton</h3>
      <p class="testimonial-rating" data-rating="5"></p>
    </div>

    <!-- Slide 2 -->
    <div class="testimonial-slide">
      <img src="{{ asset('images/beach.jpg') }}" alt="Ảnh khách hàng 2" class="testimonial-avatar" />
      <p class="testimonial-text">
        “Kỳ nghỉ ở đây thật sự tuyệt vời, cảnh biển đẹp và đồ ăn ngon...”
      </p>
      <h3 class="testimonial-name">Anna Nguyen</h3>
      <p class="testimonial-rating" data-rating="4.5"></p>
    </div>

    <!-- Slide 3 -->
    <div class="testimonial-slide">
      <img src="{{ asset('images/beach.jpg') }}" alt="Ảnh khách hàng 3" class="testimonial-avatar" />
      <p class="testimonial-text">
        “Tôi sẽ quay lại đây lần nữa, mọi thứ đều trên cả mong đợi...”
      </p>
      <h3 class="testimonial-name">John Le</h3>
      <p class="testimonial-rating" data-rating="5"></p>
    </div>

    <!-- Navigation Dots -->
    <div class="testimonial-dots">
      <span class="dot active" onclick="showSlide(0)"></span>
      <span class="dot" onclick="showSlide(1)"></span>
      <span class="dot" onclick="showSlide(2)"></span>
    </div>

  </div>
</section>
<footer class="footer">
  <div class="footer-container">
    <div class="footer-logo">
    <img src="{{ asset('images/homestay.png') }}" style="width: 200px; height: auto;" alt="Logo">
      <h2>Sky Luxury</h2>
      <p class="slogan">Hotel & Resort</p>
    </div>
    <div class="footer-column">
      <h3>Về chúng tôi</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Hình ảnh</a></li>
        <li><a href="#">Video</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Kết nối với chúng tôi</h3>
      <ul>
        <li><a href="#">Liên hệ</a></li>
        <li>Email: <a href="mailto:huynhminhsangit@gmail.com">huynhminhsangit@gmail.com</a></li>
        <li>Hotline: <a href="tel:0383308983">0383308983</a></li>
      </ul>
    </div>
  </div>
</footer>

</body>

</html>