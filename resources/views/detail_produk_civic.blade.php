<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venus Cars | Detail</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        #banner-carousel img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }
    </style>

</head>

<body class="bg-[#f2f2f2] font-sans">
    <!-- NAVBAR -->
    <nav class="bg-white shadow-md px-4 md:px-10 py-4 flex flex-wrap justify-between items-center sticky top-0 z-50">
        <div class="flex items-center gap-4 md:gap-6 w-full md:w-auto justify-between">
            <img src="/images/venuscars1.png" alt="Venus Cars Logo" class="h-10">
            <div class="relative w-full md:w-auto">
                <input type="text" placeholder="Search cars..." class="pl-10 pr-4 py-2 w-full md:w-64 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#bfae91] transition duration-300" />
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
            </div>
        </div>

        <div class="flex flex-wrap gap-4 md:gap-8 text-gray-800 text-sm font-medium tracking-wide mt-4 md:mt-0">
            <a href="/login" class="hover:text-[#5a4c36] transition">Home</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Shop</a>
            <a href="#" class="hover:text-[#5a4c36] transition">About</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Contact</a>
            <a href="#" class="hover:text-[#5a4c36] transition"><i class="fas fa-user text-lg"></i></a>
            <a href="#" class="hover:text-[#5a4c36] transition"><i class="fas fa-heart text-lg"></i></a>
        </div>
    </nav>

    <!-- Main Content -->
    <body class="bg-[#f2f2f2] font-sans">
        <!-- Gambar Banner -->
        <div id="banner-carousel" class="relative overflow-hidden w-full">
            <div class="carousel-inner flex transition-transform duration-1000 ease-in-out">
                <img src="{{ asset('images/banner_produk_civic.jpg') }}" alt="Banner 1" class="flex-shrink-0 w-full h-auto">
                <img src="{{ asset('images/banner_produk_civic2.jpg') }}" alt="Banner 2" class="flex-shrink-0 w-full h-auto">
            </div>
        </div>

        <!-- Highlight -->
        <div class="text-center py-10 pb-20 pt-20 bg-gray-50 px-4">
            <h2 class="text-2xl font-semibold text-gray-700 mb-2 fade-up">"JUST WOW."</h2>
            <p class="text-2xl font-bold text-gray-900 fade-up">MEET THE NEW TYPE R LEGACY</p>

            <div class="mt-10 pt-10 grid grid-cols-1 md:grid-cols-3 gap-4 text-center max-w-8xl mx-auto">
                <!-- Kolom 1 -->
                <div class="px-4 fade-up">
                    <h3 class="text-sm font-bold uppercase text-gray-800 mb-2">Feel The High Performance</h3>
                    <p class="text-gray-600">Jadi yang terdepan di atas lintasan dengan mesin 2.0L VTEC Turbocharged bertenaga 319 PS.</p>
                </div>

                <!-- Kolom 2 -->
                <div class="px-4 fade-up">
                    <h3 class="text-sm font-bold uppercase text-gray-800 mb-2">Sophisticated Modern Design</h3>
                    <p class="text-gray-600">Dengan desain baru yang modern dan sporty, jadikan Anda pusat perhatian di setiap perjalanan.</p>
                </div>

                <!-- Kolom 3 -->
                <div class="px-4 fade-up">
                    <h3 class="text-sm font-bold uppercase text-gray-800 mb-2">Uncompromised Features</h3>
                    <p class="text-gray-600">Beragam fitur Honda Sensing dan 4 pilihan mode berkendara jadikan perjalanan Anda aman dan nyaman.</p>
                </div>
            </div>
        </div>

        <!-- Spesifikasi -->
        <div class="bg-gray-50 py-10 px-4 flex justify-center">
            <div class="text-center max-w-xl">
                <h1 class="text-2xl font-bold mb-10">All New Honda Civic Type R 6 M/T</h1>

                <!-- Gambar Honda Civic -->
                <img src="{{ asset('images/civicwhite.png') }}" alt="Honda Civic Type R" class="mx-auto mb-10 w-full max-w-md">

                <!-- Harga -->
                <a href="#" class="inline-block w-64 border-2 border-black px-6 py-4 rounded-full mb-10 bg-[#ed1c24] hover:bg-red-700 text-white transition-colors duration-300">
                    <p class="text-sm">Harga</p>
                    <p class="text-xl font-bold">Rp1.445.500.000</p>
                    <div class="mt-2 text-white">&#8594;</div>
                </a>

                <!-- Spesifikasi Item -->
                <h2 class="text-xl font-semibold mb-4">Spesifikasi</h2>

                <div class="bg-gray-100 p-6 rounded-lg text-left">
                    <ul class="text-sm text-gray-800 space-y-2 list-disc list-inside">
                        <li>2.0L Turbocharged Engine 319 PS</li>
                        <li>6 M/T</li>
                        <li>4-mode Driving System</li>
                        <li>19” Sporty Wheels with 2 Front Brembo Calipers</li>
                        <li>10,2” Interactive TFT Meter Cluster</li>
                        <li>Honda LogR Datalogger System</li>
                        <li>Honda SENSING</li>
                        <li>8 Airbags</li>
                        <li>Triple Exhaust System</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="bg-[#000000] text-white py-6 px-6 md:px-8">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold font-serif mb-2">Venus Cars</h3>
                    <p class="text-sm text-gray-300">Menghadirkan mobil pilihan terbaik untuk setiap perjalanan hidup Anda. Karena setiap roda punya cerita.</p>
                    <p class="text-xs text-gray-400 mt-4">© 2025 Venus Cars. Drive Your Destiny.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Menu</h4>
                    <ul class="space-y-1 text-gray-300">
                        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="#" class="hover:underline">Layanan</a></li>
                        <li><a href="#" class="hover:underline">Showroom</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Hubungi Kami</h4>
                    <p class="text-sm text-gray-300 mb-2">Tim kami siap membantu Anda:<br><strong>0-800-14-46632</strong></p>
                    <div class="flex space-x-4 mt-3 text-xl">
                        <a href="#" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-red-500"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        </div>

        <script>
            const faders = document.querySelectorAll('.fade-up');

            const appearOptions = {
                threshold: 0.3,
                rootMargin: "0px 0px -50px 0px"
            };

            const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('show');
                    appearOnScroll.unobserve(entry.target);
                });
            }, appearOptions);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });

            const carouselInner = document.querySelector('.carousel-inner');
            const totalSlides = carouselInner.children.length;
            let currentIndex = 0;

            function slideTo(index) {
                carouselInner.style.transform = `translateX(-${index * 100}%)`;
            }

            function autoSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                slideTo(currentIndex);
            }

            setInterval(autoSlide, 4000); // Ganti gambar setiap 4 detik
        </script>
    </body>

</html>