<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YYT Spunbond</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-[#3f72af]">
    <!-- Navbar -->
    <nav class="navbar bg-white shadow-sm mb-5">
    <div class="container w-full mx-auto flex justify-between items-center px-5">
        <!-- Logo di pojok kiri -->
        <a class="navbar-brand" href="#">
            <img src="/assets/img/logo.jpg" alt="Logo" class="h-12">
        </a>

        <!-- Menu Navbar -->
        <nav id="navmenu" class="navmenu">
            <ul class="flex space-x-6">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#detail">Produk</a></li>
                <li><a href="#location">Location</a></li>
            </ul>
        </nav>
    </div>
</nav>



    <!-- Homepage & Slider -->
    <div id="home" class="container mt-10">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center bg-[#dbe2ef] text-black p-5" style="border-radius: 15px; height: 400px;">
                        <h2 class="text-4xl">HOMEPAGE DAN IKLAN</h2>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>

    <!--about -->
    
    <div id="about" class="container mt-20 mb-5 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
        <h1 class="text-5xl font-bold mb-15">About Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
            <div class="md:col-span-2 mt-10">
                <p class="mb-4 text-lg">YYTSPOUNBOND adalah perusahaan untuk memenuhi kebutuhan pengadaan barang promosi Perusahaan ataupun Komunitas Event Anda. YYTSPOUNBOND merupakan produsen Goodiebag custom dengan kualitas bahan dan hasil cetak terbaik.</p>
                <p class="mb-4 text-lg">YYTSPOUNBOND menawarkan harga dijamin termurah karena langsung harga pabrik dan memastikan kualitas bahan dan hasil cetak terbaik karena sebelum barang dikirim sudah melalui Quality Control untuk memastikan barang diterima pas sesuai pesanan.</p>
                <p class="mb-4 text-lg">YYTSPOUNBOND menyediakan pengerjaan Goodiebag mulai dari proses desain, cetak sablon, dan Press/jahit, sehingga dapat memenuhi kebutuhan promosi Anda secara custom atau sesuai permintaan.</p>
                <p class="mb-4 text-lg">Perusahaan kami sudah berdiri sejak tahun 2020, dan semakin berkembang ke arah yang baik, dapat dilihat dari Client kami yang banyak terdiri dari perusahaan yang cukup besar dan ternama. Sehingga kami selalu vendor yang menyediakan kualitas bahan serta Press dan jahit dengan pengerjaan yang cepat, rapi, namun tetap dengan hasil terbaik.</p>
            </div>
            <div class="flex flex-col gap-4">
                <img src="/assets/img/foto.png" alt="foto" class="rounded-lg shadow-md w-full">
                <img src="/assets/img/foto.png" alt="foto" class="rounded-lg shadow-md w-full">
            </div>
        </div>
    </div>

    <!--info-->
    <div class="container mt-20 mb-10 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div>
                <img src="/assets/img/foto.png" alt="foto" class="rounded-lg shadow-md w-full">
            </div>
            <div>
                <p class="text-2xl leading-relaxed text-gray-800">Tas ini terbuat dari bahan dasar kain spunbond yang biasa Anda temukan di supermarket lainnya sebagai pengganti kantong plastik. Karena sifatnya yang lebih ramah lingkungan, tas ini merupakan salah satu jenis tas yang disarankan oleh Pemerintah sebagai program meminimalisir limbah sampah plastik.</p>
            </div>
        </div>
        <p class="text-center font-bold text-2xl mt-6 italic">"Langkah Kecil dengan Tas Spunbond, Dampak Besar untuk Alam!"</p>
    </div>
    
    <!-- detail produk -->
    <div id="detail" class="container mt-20 mb-10 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
    <div class="grid grid-cols-3 gap-6 place-items-center">
        <!-- Gambar Produk (Baris Pertama: 3 Gambar) -->
        <img src="/assets/img/proremo.png" alt="Produk 1" class="w-full max-w-[180px] object-cover">
        <img src="/assets/img/proremo.png" alt="Produk 2" class="w-full max-w-[180px] object-cover">
        <img src="/assets/img/proremo.png" alt="Produk 3" class="w-full max-w-[180px] object-cover">

        <!-- Gambar Produk (Baris Kedua: 2 Gambar di Tengah) -->
        <img src="/assets/img/proremo.png" alt="Produk 4" class="w-full max-w-[180px] object-cover">
        <img src="/assets/img/proremo.png" alt="Produk 5" class="w-full max-w-[180px] object-cover">
        <img src="/assets/img/proremo.png" alt="Produk 6" class="w-full max-w-[180px] object-cover">
    </div>

    <!-- Tombol Cek Produk -->
    <div class="mt-6 flex justify-center">
        <button class="bg-gray-300 text-black text-lg font-semibold px-6 py-3 rounded-2xl shadow-md hover:bg-gray-400">
            Cek detail produk
        </button>
    </div>
</div>


    <!--review-->
    <div class="container mt-20 mb-10 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md" style="height:400px">
    <h1 class="text-5xl font-bold mb-15">REVIEW</h1>
    <div class="grid grid-cols-3 gap-4 mt-10">
                <img src="/assets/img/review1.png" alt="foto" class="rounded-lg shadow-md w-full"  style=" height:200px;">
                <img src="/assets/img/review2.png" alt="foto" class="rounded-lg shadow-md w-full " style=" height:200px;">
                <img src="/assets/img/review3.png" alt="foto" class="rounded-lg shadow-md w-full"style=" height:200px;">
            </div>

  </div>

    <!--adres-->
    <div id="location" class="container mt-20 mb-5 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
        <!-- Address -->
        <div class="self-start pt-2">
            <p class="mb-4 font-bold text-4xl">ADDRESS</p>
            <p class="text-2xl">Jl. Kelurahan Bubulak RT 04/03 No 45, Bogor</p>

            <p class="mb-4 mt-6 font-bold text-4xl">OPEN HOUR</p>
            <p class="text-2xl">Senin - Sabtu, Pukul 08.00 AM - 09.00 PM</p>

            <!-- Shopee & WhatsApp -->
            <div class="flex flex-col items-center gap-2 mt-20 md:flex-col md:items-start">
    <!-- Shopee -->
    <a href="https://shopee.co.id/yytolshop" target="_blank" class=" flex flex-colflex items-center gap-3">
        <img src="/assets/img/removesh.png" alt="Shopee" class="w-8 h-8">
        <span class="text-xl font-semibold">yytolshop</span>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/628581925768" target="_blank" class="flex flex-colflex items-center gap-3 ">
        <img src="/assets/img/removewa.png" alt="WhatsApp" class="w-14 h-14">
        <span class="text-xl font-semibold">08581925768</span>
    </a>
</div>

        </div>
        
        <!-- Google Maps -->
        <div class="flex justify-center w-full p-4">
            <div class="w-full max-w-md h-[300px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d434.8229398245917!2d106.756491!3d-6.5560804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58f0f80f497%3A0xed3b39d4157ef6c5!2sYYTOLSHOP!5e1!3m2!1sid!2sid!4v1740022784410!5m2!1sid!2sid"
                    class="w-full h-full rounded-lg shadow-lg"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>  
        </div>
    </div>
</div>




    
    <!-- Footer -->
    <footer class="bg-[#dbe2ef] text-black text-center py-3 mt-5">
        <p>&copy; 2025 YYT Spunbond</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
