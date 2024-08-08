<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Zen Media</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="hero h-screen">

        <!-- Navbar -->
        <div class="navbar bg-transparent  text-white fixed top-0 left-0 right-0 px-64 z-50">
            <div class="navbar-start">
                <a class="btn btn-ghost text-xl">daisyUI</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Home</a></li>
                    <li><a>About</a></li>
                    <li><a>Services</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a class="btn">Login</a>
            </div>
        </div>

        <!-- Hero -->

        <div class="hero-content text-center text-white">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Selamat Datang di D'ZEN MEDIA</h1>
                <p class="py-6">
                    Sewa kamera berkualitas tinggi dengan mudah, tangkap momen spesialmu dengan lensa terbaik dan harga terjangkau.
                </p>
                <button class="btn btn-primary">Mulai Sekarang</button>
            </div>
        </div>


    </header>
    <main></main>
    <footer></footer>
</body>

</html>