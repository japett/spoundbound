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
    <nav id="navbar" class="navbar bg-white shadow-sm fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <div class="container w-full mx-auto flex justify-between items-center px-8 py-2">
            <!-- Logo di pojok kiri -->
            <a class="navbar-brand" href="#">
                <img id="logo" src="/assets/img/logo.png" alt="Logo"
                    class="h-12 w-auto transition-all duration-300">
            </a>

            <!-- Menu Navbar -->
            <nav id="navmenu" class="navmenu">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="font-bold">Home</a></li>
                    <li><a href="#about" class="font-bold">About</a></li>
                    <a href="/menu" class="font-bold">Produk</a>
                    <li><a href="#location" class="font-bold">Location</a></li>
                </ul>
            </nav>
        </div>
    </nav>

    <!-- Tambahkan padding-top agar konten tidak tertutup navbar -->
    <style>
        body {
            padding-top: 60px;
            /* Sesuaikan dengan tinggi navbar */
        }

        /* Navbar awal lebih kecil */
        .navbar {
            padding: 0px 0;
            /* Lebih kecil sejak awal */
        }

        /* Ukuran logo lebih kecil sejak awal */
        #logo {
            height: 48px;
            /* Ukuran lebih kecil */
            width: auto;
        }

        /* Navbar semakin mengecil saat di-scroll */
        .navbar.shrink {
            padding: 0px 0;
        }

        /* Logo semakin mengecil saat scroll */
        .navbar.shrink #logo {
            height: 40px;
            /* Ukuran lebih kecil saat scroll */
        }
    </style>

    <!-- JavaScript untuk efek scroll -->
    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.getElementById("navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("shrink");
            } else {
                navbar.classList.remove("shrink");
            }
        });
    </script>






    <!-- Homepage & Slider -->
    <div id="home" class="container mt-9">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center bg-info text-black p-5"
                        style="border-radius: 0px; height: 525px;">
                        <h2>Slide 1</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center bg-warning text-black p-5"
                        style="border-radius: 0px; height: 525px;">
                        <h2>Slide 2</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center bg-success text-white p-5"
                        style="border-radius: 0px; height: 525px;">
                        <h2>Slide 3</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
                <p class="mb-4 text-lg">YYTSPOUNBOND adalah perusahaan untuk memenuhi kebutuhan pengadaan barang promosi
                    Perusahaan ataupun Komunitas Event Anda. YYTSPOUNBOND merupakan produsen Goodiebag custom dengan
                    kualitas bahan dan hasil cetak terbaik.</p>
                <p class="mb-4 text-lg">YYTSPOUNBOND menawarkan harga dijamin termurah karena langsung harga pabrik dan
                    memastikan kualitas bahan dan hasil cetak terbaik karena sebelum barang dikirim sudah melalui
                    Quality Control untuk memastikan barang diterima pas sesuai pesanan.</p>
                <p class="mb-4 text-lg">YYTSPOUNBOND menyediakan pengerjaan Goodiebag mulai dari proses desain, cetak
                    sablon, dan Press/jahit, sehingga dapat memenuhi kebutuhan promosi Anda secara custom atau sesuai
                    permintaan.</p>
                <p class="mb-4 text-lg">Perusahaan kami sudah berdiri sejak tahun 2020, dan semakin berkembang ke arah
                    yang baik, dapat dilihat dari Client kami yang banyak terdiri dari perusahaan yang cukup besar dan
                    ternama. Sehingga kami selalu vendor yang menyediakan kualitas bahan serta Press dan jahit dengan
                    pengerjaan yang cepat, rapi, namun tetap dengan hasil terbaik.</p>
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
                <p class="text-2xl leading-relaxed text-gray-900">Tas ini terbuat dari bahan dasar kain spunbond yang
                    biasa Anda temukan di supermarket lainnya sebagai pengganti kantong plastik. Karena sifatnya yang
                    lebih ramah lingkungan, tas ini merupakan salah satu jenis tas yang disarankan oleh Pemerintah
                    sebagai program meminimalisir limbah sampah plastik.</p>
            </div>
        </div>
        <p class="text-center font-bold text-2xl mt-6 italic">"Langkah Kecil dengan Tas Spunbond, Dampak Besar untuk
            Alam!"</p>
    </div>

    <!-- Detail Produk -->
    <div id="detail" class="container mt-20 mb-10 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
        <div class="grid grid-cols-3 gap-6 place-items-center">
            <!-- Gambar Produk -->
            <img src="/assets/img/proremo.png" alt="Produk 1" class="produk">
            <img src="/assets/img/proremo.png" alt="Produk 2" class="produk">
            <img src="/assets/img/proremo.png" alt="Produk 3" class="produk">
            <img src="/assets/img/proremo.png" alt="Produk 4" class="produk">
            <img src="/assets/img/proremo.png" alt="Produk 5" class="produk">
            <img src="/assets/img/proremo.png" alt="Produk 6" class="produk">
        </div>
    </div>

    <!-- CSS untuk efek sentuh -->
    <style>
        .produk {
            width: 100%;
            max-width: 180px;
            object-cover: cover;
            transition: transform 0.3s ease-in-out;
            /* Efek transisi halus */
        }

        /* Efek saat disentuh atau dihover */
        .produk:hover,
        .produk:active {
            transform: scale(1.2);
            /* Membesar 1.2x saat disentuh */
        }
    </style>



    <!-- Tombol Cek Produk -->
    <div class="mt-6 flex justify-center">
        <a href="/menu"
            class="bg-gray-300 text-black text-lg font-semibold px-6 py-3 rounded-2xl shadow-md hover:bg-gray-400">
            Cek detail produk
        </a>
    </div>
    </div>


    <!-- REVIEW -->
    <div class="container mt-20 mb-10 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md" style="height:400px">
        <h1 class="text-5xl font-bold mb-15">REVIEW</h1>
        <div class="grid grid-cols-3 gap-4 mt-10">
            <img src="/assets/img/review1.png" alt="foto" class="review-img cursor-pointer"
                onclick="openModal(this)">
            <img src="/assets/img/review2.png" alt="foto" class="review-img cursor-pointer"
                onclick="openModal(this)">
            <img src="/assets/img/review3.png" alt="foto" class="review-img cursor-pointer"
                onclick="openModal(this)">
        </div>
    </div>

    <!-- Modal (Pop-up) -->
    <div id="imageModal"
        class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 hidden flex justify-center items-center z-50">
        <div class="relative bg-white p-5 rounded-lg shadow-lg">
            <button class="absolute top-2 right-2 text-xl font-bold text-gray-600 hover:text-gray-900"
                onclick="closeModal()">&times;</button>
            <img id="modalImage" class="max-w-[90vw] max-h-[80vh] rounded-lg">
        </div>
    </div>

    <!-- CSS untuk efek hover -->
    <style>
        .review-img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .review-img:hover {
            transform: scale(1.1);
        }
    </style>

    <!-- JavaScript untuk modal -->
    <script>
        function openModal(img) {
            document.getElementById("imageModal").classList.remove("hidden");
            document.getElementById("modalImage").src = img.src;
        }

        function closeModal() {
            document.getElementById("imageModal").classList.add("hidden");
        }
    </script>



    <!--adres-->
    <div id="location" class="container mt-20 mb-5 mx-auto max-w-6xl bg-[#dbe2ef] p-10 rounded-lg shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Address -->
            <div class="self-start pt-2">
                <p class="mb-4 font-bold text-4xl">ADDRESS</p>
                <p class="text-2xl">Kp. Semplak Rt 04/03 Kelurahan Bubulak</p>
                <p class="text-2xl">45 Kec. Bogor Barat Kota Bogor 16115</p>

                <p class="mb-4 mt-6 font-bold text-4xl">OPEN HOUR</p>
                <p class="text-2xl">Senin - Sabtu, Pukul 08.00 AM - 09.00 PM</p>

                <!-- Shopee & WhatsApp -->
                <div class="flex flex-col items-center gap-2 mt-20 md:flex-col md:items-start">
                    <!-- Shopee -->
                    <a href="https://shopee.co.id/yytolshop" target="_blank"
                        class="flex items-center gap-3 bg-gray-300 text-black text-lg font-semibold px-4 py-1 rounded-full shadow-md hover:bg-gray-400 transition w-64">
                        <img src="/assets/img/removesh.png" alt="Shopee" class="w-8 h-8">
                        <span>yytolshop</span>
                    </a>


                    <!-- WhatsApp -->
                    <a href="https://wa.me/628581925768" target="_blank"
                        class="flex items-center gap-3 bg-gray-300 text-black text-lg font-semibold px-8 py-0 rounded-full shadow-md hover:bg-gray-400 transition w-64">
                        <img src="/assets/img/wa.png" alt="WhatsApp" class="w-10 h-10">
                        <span>085892727099</span>
                    </a>

                </div>

            </div>

            <!-- Google Maps -->
            <div class="flex justify-center w-300 p-10">
                <div class="w-full max-w-lg h-[300px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d434.8229398245917!2d106.756491!3d-6.5560804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58f0f80f497%3A0xed3b39d4157ef6c5!2sYYTOLSHOP!5e1!3m2!1sid!2sid!4v1740022784410!5m2!1sid!2sid"
                        class="w-full h-full rounded-lg shadow-lg" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer -->
    <footer class="bg-[#dbe2ef] text-black text-center py-3 mt-5">
        <p>&copy; 2025 YYT Spoundbound</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
