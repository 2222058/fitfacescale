<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>FitFaceScale</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

    <!-- Cabeçalho -->
    <header class="p-4 bg-white shadow flex justify-between">
        <a href="{{ url('/') }}" class="font-bold text-xl text-gray-800 hover:text-pink-600 transition">
            FitFaceScale
        </a>
    </header>

    <!-- Conteúdo principal -->
    <main class="flex-grow p-6">
        @yield('content') 
    </main>

    <!-- Rodapé -->
    <footer class="bg-white text-center text-sm text-gray-500 py-4 shadow-inner">
        Projeto desenvolvido por Duarte Santana, Francisco Crespo e Ricardo Zambujinho.
    </footer>

</body>
</html>
