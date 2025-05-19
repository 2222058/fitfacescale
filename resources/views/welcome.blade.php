<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>FitFaceScale</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">

    {{-- Cabeçalho com dois botões --}}
    <header class="flex justify-between items-center p-6 shadow">
        <a href="{{ url('/') }}" class="font-bold text-2xl text-gray-800 hover:text-pink-500 transition">
            FitFaceScale
        </a>
        <div class="flex items-center gap-4">
        <a href="{{ route('pesagens.index') }}" class="text-black">
    Ver Pesagens
        </a>

            <a href="{{ route('login') }}"
               class="px-4 py-2 border border-pink-500 text-pink-500 rounded hover:bg-pink-500 hover:text-white transition">
               Login
            </a>
        </div>
    </header>

    {{-- Conteúdo central --}}
    <main class="flex flex-col items-center justify-center min-h-[70vh] text-center px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Bem-vindo à FitFaceScale</h2>
    </main>

    {{-- Imagem decorativa no final --}}
    <footer class="w-full mt-10">
        <img src="{{ asset('images/background.png') }}"
             alt="Imagem decorativa"
             class="w-full max-h-[400px] object-cover">
             
    </footer>

     <!-- Rodapé -->
     <footer class="bg-white text-center text-sm text-gray-500 py-4 shadow-inner">
        Projeto desenvolvido por Duarte Santana, Francisco Crespo e Ricardo Zambujinho.
    </footer>

    

</body>
</html>
