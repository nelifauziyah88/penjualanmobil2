<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjual - Seller Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-50 flex flex-col">
        <!-- Logo -->
        <div class="flex items-center justify-center h-24">
            <img src="/images/venuscars1.png" alt="Venus Cars" class="h-16">
        </div>
        <nav class="mt-4">
            <a href="/dashboard-penjual" class="flex items-center px-6 py-2 text-gray-700 hover:bg-gray-100">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 20v-6h4v6h5v-8h3L10 0 2 12h3v8z" />
                </svg>
                <span class="ml-3">Dashboard</span>
            </a>
            <a href="#" class="flex items-center px-6 py-2 text-gray-700 hover:bg-gray-100 font-bold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M20 7l-8-4-8 4m16 0v10a2 2 0 01-2 2H6a2 2 0 01-2-2V7m16 0L12 13 4 7" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="ml-3">Daftar Produk</span>
            </a>
            <a href="/daftar-pesanan" class="flex items-center px-6 py-2 text-gray-700 hover:bg-gray-100 font-bold">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4 4h16v2H4zm0 7h16v2H4zm0 7h16v2H4z" />
                </svg>
                <span class="ml-3">Daftar Pesanan</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col bg-gray-50">

        <!-- Navbar -->
        <header class="p-6 flex justify-center items-center relative">
            <h1 class="text-2xl font-semibold">Seller Center</h1>

            <!-- Tombol Settings (link ke halaman profile penjual) -->
            <a href="/penjual/profile"
                class="absolute right-36 top-6 bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.983 13.931a2.003 2.003 0 100-4.006 2.003 2.003 0 000 4.006zM19.435 12.478c.03-.316.045-.638.045-.965s-.015-.649-.045-.965l2.122-1.654a.5.5 0 00.11-.638l-2-3.464a.5.5 0 00-.605-.22l-2.497 1a7.99 7.99 0 00-1.671-.965l-.378-2.65A.5.5 0 0014 2h-4a.5.5 0 00-.497.435l-.378 2.65a7.99 7.99 0 00-1.671.965l-2.497-1a.5.5 0 00-.605.22l-2 3.464a.5.5 0 00.11.638l2.122 1.654c-.03.316-.045.638-.045.965s.015.649.045.965L2.453 14.13a.5.5 0 00-.11.638l2 3.464a.5.5 0 00.605.22l2.497-1c.52.39 1.08.718 1.671.965l.378 2.65A.5.5 0 0010 22h4a.5.5 0 00.497-.435l.378-2.65a7.99 7.99 0 001.671-.965l2.497 1a.5.5 0 00.605-.22l2-3.464a.5.5 0 00-.11-.638l-2.122-1.654z" />
                </svg>
                Settings
            </a>
        </header>

        <!-- Produk & Pesanan -->
        <main class="flex-1 p-10 bg-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 pt-2">
                <!-- Card Produk -->
                <a href="#" class="border border-gray-400 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-boxes text-2xl mr-3"></i>
                        <h2 class="text-2xl font-semibold">Produk</h2>
                    </div>
                    <p class="text-lg">Total: </p>
                </a>

                <!-- Card Pesanan -->
                <a href="/daftar-pesanan" class="border border-gray-400 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-list text-2xl mr-3"></i>
                        <h2 class="text-2xl font-semibold">Pesanan</h2>
                    </div>
                    <p class="text-lg">Total: </p>
                </a>
            </div>
        </main>

</body>

</html>