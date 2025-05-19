<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-bold mb-6">Bem-vindo, {{ Auth::user()->name }}</h3>

                    <div class="space-y-2 text-lg">
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Idade:</strong> {{ Auth::user()->idade }}</p>
                        <p><strong>Altura:</strong> {{ Auth::user()->altura }} m</p>
                        <p><strong>Peso:</strong> {{ Auth::user()->peso }} kg</p>
                        <p><strong>Número de Sócio:</strong> {{ Auth::user()->numero_socio }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
