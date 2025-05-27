<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venus Cars | Contact Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/contact_us.css') }}" rel="stylesheet">
    <script src="{{ asset('js/contact_us.js') }}"></script>
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
    <div class="w-full">
        <img src="{{ asset('images/hero_cars.jpg') }}" alt="Hero Cars" class="w-full object-cover max-h-[500px]">

        <div class="my-16 md:my-32 px-4 mb-20">
            <div class="text-center reveal">
                <h1 class="text-3xl md:text-4xl font-bold text-black">Contact Us</h1>
                <p class="text-gray-600 mt-6 text-base md:text-lg max-w-2xl mx-auto">
                    "Contact us and be part of this awesome journey together."
                </p>
            </div>

            <div class="my-16 md:my-32 text-center reveal">
                <h1 class="text-3xl md:text-4xl font-bold text-black">Need Further Assistance?</h1>
                <p class="text-gray-600 mt-6 text-base md:text-lg max-w-2xl mx-auto">
                    Our team is ready to support you. Feel free to get in touch through the contact methods below.
                </p>

                <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-12 text-left px-4 md:px-24">
                    <div class="border-b md:border-b-0 md:border-r border-gray-300 pb-6 md:pb-0 md:pr-10 reveal-left">
                        <h2 class="text-xl font-semibold text-black mb-3">Phone + Email</h2>
                        <p class="text-gray-700">Phone: 0813-7853-5706</p>
                        <p class="text-gray-700 mt-1">Email: @venuscars@gmail.com</p>
                    </div>
                    <div class="border-b md:border-b-0 md:border-r border-gray-300 md:px-10 reveal-left">
                        <h2 class="text-xl font-semibold text-black mb-3">Response Hours</h2>
                        <p class="text-gray-700">
                            <span class="font-semibold underline">Normal Hours:</span><br>
                            Monday – Friday: 8:00 a.m. – 8:00 p.m.<br>
                            Saturday: 9:00 a.m. – 7:00 p.m.
                        </p>
                    </div>
                    <div class="md:pl-10 reveal-left">
                        <h2 class="text-xl font-semibold text-black mb-3">Postal Mail</h2>
                        <p class="text-gray-700">
                            Venus Cars<br>
                            Jalan Ahmad Yani No. 88,<br>
                            Komp. Ruko Mitra Raya Blok B No.5,<br>
                            Batam Kota, Kepulauan Riau 29444<br>
                            Indonesia
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center reveal py-12">
                <h1 class="text-3xl md:text-4xl font-bold text-black">Toyota Brand Engagement Center</h1>
                <p class="text-lg font-semibold mt-6 text-gray-700">Call 0813-7853-5706</p>
                <div class="mt-4 text-gray-800">
                    <p class="font-semibold underline">Normal Hours:</p>
                    <p>Monday – Friday: 8:00 a.m. – 8:00 p.m.</p>
                    <p>Saturday: 9:00 a.m. – 7:00 p.m.</p>
                </div>
                <a href="#" class="mt-6 inline-block bg-[#bfae91] hover:bg-[#a99b7b] text-white font-semibold px-6 py-3 rounded transition">Contact Us</a>
            </div>

            <div class="w-full max-w-[95%] md:max-w-[1100px] mx-auto relative" id="rotating-image">
                <img src="images/image.png" alt="Support Image" class="rounded-full w-full h-auto object-cover">

                <!-- Tambahan teks di tengah gambar -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 reveal">
                    <h2 class="text-black mt-2 text-sm md:text-lg max-w-2xl reveal">Telusuri jejak Venus Cars di Batam</h2>
                    <p class="text-black mt-2 text-sm md:text-lg max-w-2xl reveal">
                        temukan perjalanan inovasi dan dedikasi kami.
                    </p>
                </div>

                <div class="half-cover-bottom flex flex-col items-center justify-center text-center py-8">
                    <h2 class="text-2xl md:text-4xl font-bold text-gray-800 reveal">Wujudkan visi, jelajahi inovasi</h2>
                    <a href="#" class="mt-4 bg-[#ed1c24] hover:bg-[#c3141b] text-white font-bold text-lg md:text-2xl px-6 py-3 rounded-full shadow-lg transition reveal">
                        Temukan Honda-mu!
                    </a>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="bg-[#000000] text-white py-6 px-6 md:px-8 mt-12">
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
</body>

</html>