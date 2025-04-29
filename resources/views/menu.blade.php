<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YYT Spunbond</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* --- Global Styles --- */
        body {
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #3f72af;
        }

        /* --- Navbar --- */
        .navbar {
            padding: 10px 20px;
        }

        #logo {
            height: 48px;
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar.shrink {
            padding: 5px 10px;
        }

        .navbar.shrink #logo {
            height: 40px;
        }

        /* --- Container utama --- */
        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 1500px;
            font-size: 30px;
            padding: 10px;
        }

        /* --- OUR PRODUCT --- */
        .product-container {
            margin-top: 80px;
            background: #dbe2ef;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            width: 95%;
            max-width: 1200px;
            margin-bottom: 30px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .product-container h2 {
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .product-container img {
            width: 100%;
            max-width: 800px; /* Gambar lebih besar di desktop */
            height: auto;
            border-radius: 10px;
            display: block;
            margin: 10px auto;
        }

        /* --- OUR COOPERATION --- */
        .cooperation-container {
            background: #dbe2ef;
            padding: 20px;
            border-radius: 20px;
            text-align: center;
            width: 95%;
            max-width: 1200px;
            margin: 30px auto;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .cooperation-container h2 {
            font-weight: bold;
            text-align: left;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
            justify-content: center;
        }

        .grid-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* --- Footer --- */
        footer {
            width: 100%;
            background: #dbe2ef;
            text-align: center;
            padding: 15px;
            font-size: 16px;
            position: relative;
            left: 0;
            bottom: 0;
        }

        /* --- Media Queries (Mobile) --- */
        @media screen and (max-width: 768px) {
            .navbar {
                padding: 5px 10px;
            }

            #logo {
                height: 40px;
            }

            .product-container,
            .cooperation-container {
                padding: 15px;
            }

            .product-container h2,
            .cooperation-container h2 {
                font-size: 20px;
                text-align: center;
            }

            .product-container img {
                max-width: 500px; /* Ukuran gambar tetap kecil di mobile */
            }

            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            }

            footer {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav id="navbar" class="navbar bg-white shadow-sm fixed top-0 left-0 w-full z-50 transition-all duration-300">
        <div class="container flex justify-between items-center px-6 py-2">
            <a href="#">
                <img id="logo" src="/assets/img/logo.png" alt="Logo">
            </a>
            <ul class="flex space-x-6">
                <li><a href="/" class="font-bold">Home</a></li>
            </ul>
        </div>
    </nav>

    <!-- Container utama -->
    <div class="content-container">
        
        <!-- Our Product -->
        <div class="product-container">
            <h2>OUR PRODUCT</h2>
            <img src="/assets/img/product.png" alt="Produk1">
            <img src="/assets/img/product.png" alt="Produk2">
            <img src="/assets/img/product.png" alt="Produk3">
        </div>

        <!-- Our Cooperation -->
        <div class="cooperation-container">
            <h2>OUR COOPERATION</h2>
            <div class="grid-container">
                <img src="/assets/img/cooperation.png" alt="Cooperation">
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 YYT Spoundbound</p>
    </footer>

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

</body>

</html>
