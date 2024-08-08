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
                <a class="btn btn-ghost text-xl">D'Zen Media</a>
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
            <div class="max-w-xl">
                <h1 class="text-7xl font-bold">Selamat Datang di D'ZEN MEDIA</h1>
                <p class="py-6 text-2xl">
                    Sewa kamera berkualitas tinggi dengan mudah, tangkap momen spesialmu dengan lensa terbaik dan harga terjangkau.
                </p>
                <button class="btn btn-primary">Mulai Sekarang</button>
            </div>
        </div>

    </header>
    <main>

        <!-- About US -->
        <div class="about min-h-screen  text-white text-center flex flex-col justify-center items-center">

            <h2 class="font-bold text-5xl pt-8 mb-12">About Us</h2>
            <div class="flex flex-row max-w-7xl gap-16 items-center">
                <div class="">
                    <img src="./images/office.jpg" alt="Gambar office">
                </div>
                <div class="">
                    <p class="mt-4 text-xl text-left leading-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, atque? Ab, doloribus incidunt ullam quia repudiandae culpa deserunt modi hic velit magni suscipit tenetur nobis dolorem, expedita quis nesciunt asperiores nihil itaque totam ipsum magnam exercitationem architecto eum ex? Voluptates accusamus quo enim maxime libero obcaecati ipsum ut laborum necessitatibus.</p>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="services min-h-screen text-white text-center flex flex-col justify-center items-center">
            <h2 class="font-bold text-5xl pt-8 mb-12">Our Services</h2>
            <div class="flex flex-wrap gap-8 justify-center px-40">
                <!-- Carrds -->
                <div class="card bg-base-100 image-full w-96 shadow-xl">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl">
                    <figure>
                        <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="footer text-neutral-content p-10">
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
    </footer>

</body>

</html>