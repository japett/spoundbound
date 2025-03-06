<!DOCTYPE html>
<html lang="en">

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
                <ul class="flex space-x-9">
                    <li><a href="/" class="font-bold">Home</a></li>
                </ul>
            </nav>
        </div>
    </nav>

    <!-- Tambahkan padding-top agar konten tidak tertutup navbar -->
    <style>
        body {
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar awal lebih kecil */
        .navbar {
            padding: 0px 0;
        }

        /* Ukuran logo lebih kecil sejak awal */
        #logo {
            height: 48px;
            width: auto;
        }

        /* Navbar semakin mengecil saat di-scroll */
        .navbar.shrink {
            padding: 0px 0;
        }

        /* Logo semakin mengecil saat scroll */
        .navbar.shrink #logo {
            height: 40px;
        }

        /* Container utama */
        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        /* OUR PRODUCT */
        .product-container,
        .cooperation-container {
            background: #dbe2ef;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            max-width: 95%;
            width: 1500px;
            margin: 50px auto;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .product-image,
        .cooperation-image {
            width: 100%;
            border-radius: 10px;
        }

        h2 {
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
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

    <!-- Container untuk semua konten -->
    <div class="content-container">
        <!-- Our Product -->
        <div class="product-container">
            <h2>OUR PRODUCT</h2>
            <img class="product-image" src="/assets/img/product.png" alt="Produk1">
            <img class="product-image" src="/assets/img/product.png" alt="Produk2">
            <img class="product-image" src="/assets/img/product.png" alt="Produk3">
        </div>

        <!-- Our Cooperation -->
        <div class="cooperation-container">
            <h2>OUR COOPERATION</h2>
            <img class="cooperation-image" src="/assets/img/cooperation.png" alt="Cooperation">
        </div>
    </div>

</body>

<!-- Footer -->
<footer class="bg-[#dbe2ef] text-black text-center py-3 mt-9">
    <p>&copy; 2025 YYT Spoundbound</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
