<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto">

        {{-- PAGE HEADING --}}
        <h1 class="text-2xl font-bold mb-4">WebApp - Aplikasi Pemantauan Cash Flow</h1>

        {{-- GLOBAL NAVIGATION (TAB MENU) --}}
        <nav class="flex space-x-4 mb-6 border-b pb-2">

            <a href="{{ route('transaction.index') }}"
               class="px-3 py-2 font-semibold
               {{ request()->routeIs('transaction.*') 
                   ? 'text-green-600 border-b-2 border-green-600' 
                   : 'text-gray-600 hover:text-gray-800' }}">
                Halaman Utama/Transaksi
            </a>

            <a href="{{ route('category.index') }}"
               class="px-3 py-2 font-semibold
               {{ request()->routeIs('category.*') 
                   ? 'text-green-600 border-b-2 border-green-600' 
                   : 'text-gray-600 hover:text-gray-800' }}">
                Kategori
            </a>

            <a href="{{ route('coa.index') }}"
               class="px-3 py-2 font-semibold
               {{ request()->routeIs('coa.*') 
                   ? 'text-green-600 border-b-2 border-green-600' 
                   : 'text-gray-600 hover:text-gray-800' }}">
                COA
            </a>

        </nav>

        {{-- MAIN CONTENT --}}
        <main>
            @yield('content')
        </main>

    </div>

</body>
</html>
