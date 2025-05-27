<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Produk')</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Header (optional) -->
    <header class="bg-white shadow mb-6">
        <div class="max-w-7xl mx-auto py-4 px-6">
            <h1 class="text-xl font-semibold">@yield('title', 'Daftar Produk')</h1>
        </div>
    </header>

    <!-- Main content -->
    <main class="max-w-7xl mx-auto px-6">
        @yield('content')
    </main>

</body>
</html>
