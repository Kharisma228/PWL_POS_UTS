<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toserba Etana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            color: #000;
            scroll-behavior: smooth;
        }

        header {
            background-color: rgba(41, 75, 139, 0.8);
            padding: 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between; /* Menjadikan konten kiri dan kanan sama rata */
            align-items: center;
        }

        header h1 {
            font-size: 28px;
            margin-left: 50px; /* Jarak kiri dari tepi */
            color: #fa872f;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 40px; /* Jarak antar item menu */
            margin-right: 50px; /* Jarak kanan dari tepi */
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #f78a41;
        }

        .btn-login {
            background-color: #F56C00;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-login:hover {
            background-color: #f78a41;
        }

        .hero {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset('images/landing.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            padding-top: 150px;
            text-align: center;
            height: 100vh;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: background-image 0.1s ease-in; /* Animasi cepat pada gambar background */
        }

        .hero h2 {
            font-size: 65px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 40px;
            margin-bottom: 30px;
        }

        .section {
            padding: 80px 20px;
            text-align: justify;
            background-color: #ffffff;
            border-radius: 15px;
            margin-bottom: 30px;
            color: #333;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            padding-top: 120px;
        }

        .section p {
            font-size: 18px;
            line-height: 1.8;
        }

        /* Pemisah antara sections */
        .divider {
            height: 1px;
            background-color: #ccc;
            margin: 40px 0;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 kolom produk */
            gap: 30px;
            margin-top: 20px;
            justify-items: center;
        }

        .product-item {
            text-align: center;
        }

        .product-item img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .product-item h3 {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .footer {
            background-color: rgba(41, 75, 139, 0.8);
            color: #ffffff;
            text-align: center;
            padding: 20px;
            width: 100%;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer .brand {
            font-size: 24px;
            font-weight: 600;
            color: #fa872f;
        }

        /* Responsif */
        @media (max-width: 768px) {
            header h1 {
                font-size: 20px;
            }

            nav ul li a {
                font-size: 16px;
            }

            .hero h2 {
                font-size: 32px;
            }

            .hero p,
            .section p {
                font-size: 16px;
            }

            .products {
                grid-template-columns: repeat(2, 1fr); /* 2 kolom pada layar kecil */
            }

            .product-item img {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>

<body>

    <!-- Header dengan Navigasi -->
    <header>
        <h1>TOSERBA ETANA</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="{{ route('login') }}" class="btn-login"><b>Login / Sign Up</b></a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero atau Bagian Selamat Datang -->
    <div class="hero" id="home">
        <h2>Selamat datang di Toserba Etana</h2>
        <p>Kami Sediakan Apa Yang Anda Butuhkan</p>
    </div>

    <!-- Bagian About Us -->
    <section class="section" id="about">
        <h2>Tentang Kami</h2>
        <p>
            Toserba Etana adalah pusat perbelanjaan yang berdedikasi untuk memenuhi kebutuhan rumah tangga Anda. Kami menawarkan berbagai produk dengan harga terjangkau dan kualitas yang terbaik. Visi kami adalah menjadi toko yang dapat diandalkan untuk segala kebutuhan, mulai dari bahan makanan, minuman, hingga peralatan rumah tangga dan produk kesehatan. Dengan pelayanan yang ramah dan profesional, kami memastikan setiap pengalaman berbelanja di Toserba Etana menjadi nyaman dan memuaskan.
        </p>
        <p>
            Kami juga selalu berusaha untuk menjaga hubungan baik dengan para pelanggan kami, dengan berbagai promosi menarik serta produk yang sesuai dengan kebutuhan masyarakat. Lokasi kami yang strategis di pusat kota memudahkan Anda untuk berbelanja kapan pun Anda mau. Kami memiliki berbagai layanan yang akan membuat belanja Anda menjadi lebih praktis, cepat, dan menyenangkan.
        </p>
        <p>Alamat kami: <strong>Jl Remujung No 54, Jatimulyo, Lowokwaru, Kota Malang</strong></p>
    </section>

    <!-- Pemisah -->
    <div class="divider"></div>

    <!-- Bagian Produk -->
    <section class="section" id="products">
        <h2>Produk Kami</h2>
        <p>Kami menyediakan berbagai macam produk sesuai kebutuhan Anda. Berikut adalah kategori yang tersedia:</p>
        <div class="products">
            <div class="product-item">
                <img src="{{ asset('images/makanan.jpg') }}" alt="Makanan">
                <h3>Makanan</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/minuman.jpg') }}" alt="Minuman">
                <h3>Minuman</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/olahraga.jpg') }}" alt="Olahraga">
                <h3>Olahraga</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/elektronik.jpg') }}" alt="Elektronik">
                <h3>Elektronik</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/pakaian.jpg') }}" alt="Pakaian">
                <h3>Pakaian</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/kosmetik.jpg') }}" alt="Kosmetik">
                <h3>Kosmetik</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/sayuran.jpg') }}" alt="Sayuran">
                <h3>Sayuran</h3>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/rumah_tangga.jpg') }}" alt="Perlengkapan Rumah Tangga">
                <h3>Perlengkapan Rumah Tangga</h3>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="brand">Toserba Etana</p>
        <p>&copy; 2024 | Toserba Etana | All rights reserved.</p>
    </footer>

</body>

</html>
