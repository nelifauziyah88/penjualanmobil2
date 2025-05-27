<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venus Cars | Showroom</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f2f2f2] font-sans">
    <!-- NAVBAR -->
    <nav class="bg-white shadow-md px-10 py-4 flex justify-between items-center">
        <!-- Logo dan Search -->
        <div class="flex items-center gap-6">
            <img src="/images/venuscars1.png" alt="Venus Cars Logo" class="h-10">
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Search cars..." 
                    class="pl-10 pr-4 py-2 w-64 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#bfae91] transition duration-300"
                />
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
            </div>
        </div>
    
        <!-- Navigasi -->
        <div class="flex items-center gap-8 text-gray-800 text-sm font-medium tracking-wide">
            <a href="/login" class="hover:text-[#5a4c36] transition">Home</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Shop</a>
            <a href="#" class="hover:text-[#5a4c36] transition">About</a>
            <a href="#" class="hover:text-[#5a4c36] transition">Contact</a>
    
            <a href="#" class="hover:text-[#5a4c36] transition">
                <i class="fas fa-user text-lg"></i>
            </a>
            <a href="#" class="hover:text-[#5a4c36] transition">
                <i class="fas fa-heart text-lg"></i>
            </a>
        </div>
    </nav>
    
    <!-- MAIN CONTENT -->

    <div class="flex items-start">
        <!-- SIDEBAR -->
        <div class="w-24 bg-[#e3d8c4] text-center py-8 flex flex-col gap-8 rounded-r-3xl shadow-xl border-r border-[#cbbca1] sticky top-0">
            <a href="#" class="flex flex-col items-center group">
                <div class="bg-white rounded-full p-3 shadow-md group-hover:bg-[#bfae91] transition duration-300">
                    <i class="fas fa-car-side text-xl text-gray-700 group-hover:text-white"></i>
                </div>
                <span class="text-xs mt-2 text-gray-700 group-hover:text-[#5a4c36] font-medium transition">MPV</span>
            </a>
            
            <a href="#" class="flex flex-col items-center group">
                <div class="bg-white rounded-full p-3 shadow-md group-hover:bg-[#bfae91] transition duration-300">
                    <i class="fas fa-car text-xl text-gray-700 group-hover:text-white"></i>
                </div>
                <span class="text-xs mt-2 text-gray-700 group-hover:text-[#5a4c36] font-medium transition">SEDAN</span>
            </a>
            
            <a href="#" class="flex flex-col items-center group">
                <div class="bg-white rounded-full p-3 shadow-md group-hover:bg-[#bfae91] transition duration-300">
                    <i class="fas fa-car-alt text-xl text-gray-700 group-hover:text-white"></i>
                </div>
                <span class="text-xs mt-2 text-gray-700 group-hover:text-[#5a4c36] font-medium transition">SPORTS</span>
            </a>
            
            <a href="#" class="flex flex-col items-center group">
                <div class="bg-white rounded-full p-3 shadow-md group-hover:bg-[#bfae91] transition duration-300">
                    <i class="fas fa-truck-monster text-xl text-gray-700 group-hover:text-white"></i>
                </div>
                <span class="text-xs mt-2 text-gray-700 group-hover:text-[#5a4c36] font-medium transition">SUV</span>
            </a>
        </div>
        
        <!-- BANNER -->
        <div class="w-full p-6 text-center">
            <img src="/images/banner_dashboard.png" alt="Banner" class="w-full rounded-lg shadow-md" />
            <!-- SECTION LIST MOBIL -->
<div class="w-full px-6 mt-10">
    <h2 class="text-2xl font-semibold text-[#5a4c36] mb-6 text-left">Most Popular</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Mobil 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img src="/images/mobil1.jpg" alt="Toyota Avanza" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Toyota Avanza</h3>
                <p class="text-sm text-gray-500">MPV | Tahun 2021</p>
                <p class="text-[#bfae91] font-bold mt-2">Rp 180.000.000</p>
                <a href="/login" class="mt-4 inline-block bg-[#bfae91] text-white px-4 py-1 rounded-full text-sm hover:bg-[#a08f77] transition">Lihat Detail</a>
            </div>
        </div>

        <!-- Mobil 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img src="/images/mobil2.jpg" alt="Honda Civic" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Honda Civic</h3>
                <p class="text-sm text-gray-500">Sedan | Tahun 2020</p>
                <p class="text-[#bfae91] font-bold mt-2">Rp 350.000.000</p>
                <a href="/customer/login" class="mt-4 inline-block bg-[#bfae91] text-white px-4 py-1 rounded-full text-sm hover:bg-[#a08f77] transition">Lihat Detail</a>
            </div>
        </div>

        <!-- Mobil 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img src="/images/mobil3.jpg" alt="Mazda CX-5" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">Mazda CX-5</h3>
                <p class="text-sm text-gray-500">SUV | Tahun 2022</p>
                <p class="text-[#bfae91] font-bold mt-2">Rp 470.000.000</p>
                <a href="/login" class="mt-4 inline-block bg-[#bfae91] text-white px-4 py-1 rounded-full text-sm hover:bg-[#a08f77] transition">Lihat Detail</a>
            </div>
        </div>

        <!-- Mobil 4 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img src="/images/mobil4.jpg" alt="BMW M4" class="w-full h-40 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">BMW M4</h3>
                <p class="text-sm text-gray-500">Sports | Tahun 2023</p>
                <p class="text-[#bfae91] font-bold mt-2">Rp 1.200.000.000</p>
                <a href="/login" class="mt-4 inline-block bg-[#bfae91] text-white px-4 py-1 rounded-full text-sm hover:bg-[#a08f77] transition">Lihat Detail</a>
            </div>
        </div>
    </div>
</div>
            <a href=""
               class="mt-6 inline-block bg-[#bfae91] text-white px-6 py-2 rounded-full font-medium hover:bg-[#a08f77] transition">
              Shop Now
            </a>
        </div>          
    </div>

    <!-- FOOTER -->
    <footer class="bg-[#000000] text-white py-10 px-8 mt-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Info Brand -->
            <div>
                <h3 class="text-2xl font-bold font-serif mb-2">Venus Cars</h3>
                <p class="text-sm text-gray-300">
                    Menghadirkan mobil pilihan terbaik untuk setiap perjalanan hidup Anda. 
                    Karena setiap roda punya cerita.
                </p>
                <p class="text-xs text-gray-400 mt-4">© 2025 Venus Cars. Drive Your Destiny.</p>
            </div>
    
            <!-- Link Navigasi -->
            <div>
                <h4 class="text-lg font-semibold mb-2">Menu</h4>
                <ul class="space-y-1 text-gray-300">
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Layanan</a></li>
                    <li><a href="#" class="hover:underline">Showroom</a></li>
                </ul>
            </div>
    
            <!-- Kontak & Sosmed -->
            <div>
                <h4 class="text-lg font-semibold mb-2">Hubungi Kami</h4>
                <p class="text-sm text-gray-300 mb-2">
                    Tim kami siap membantu Anda:<br>
                    <strong>0-800-14-46632</strong>
                </p>
                <div class="flex space-x-4 mt-3 text-xl">
                    <a href="#" class="hover:text-pink-400"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-red-500"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html>