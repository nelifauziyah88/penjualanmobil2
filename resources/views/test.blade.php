<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk Skincare - Tailwind</title>

    <link rel="stylesheet" href="/styles/style.css">
    <script src="/styles/tailwindcss3.4.1.js"></script>
</head>
<body class="bg-gray-100 p-8">

    <!-- Judul Tengah -->
    <h1 class="text-center text-3xl font-bold text-red-500 mb-10">
        Produk Skincare Terlaris
    </h1>

    <!-- Panggil Komponen -->
    @include('components.produk_skincare')

</body>
</html>
