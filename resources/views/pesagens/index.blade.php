@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">As tuas pesagens</h2>

    {{-- Tabela com estilos melhorados --}}
    <div class="overflow-x-auto bg-white shadow rounded-lg mb-10">
        <table class="w-full table-auto border-collapse">
            <thead class="bg-pink-600">
                <tr>
                    <th class="text-left p-4 border-b text-black">Data</th>
                    <th class="text-left p-4 border-b text-black">Peso (kg)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesagens as $pesagem)
                    <tr class="border-b">
                        <td class="p-4 text-gray-800">{{ \Carbon\Carbon::parse($pesagem->data_pesagem)->format('d/m/Y') }}</td>
                        <td class="p-4 text-gray-800">{{ $pesagem->peso }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Paginação --}}
    <div class="flex justify-between items-center mt-4">
        <div class="text-sm text-gray-700">
            Showing {{ $pesagens->firstItem() }} to {{ $pesagens->lastItem() }} of {{ $pesagens->total() }} results
        </div>
        <div class="space-x-2">
            {{ $pesagens->links('pagination::tailwind') }}
        </div>
    </div>

</div>

    {{-- Gráfico --}}
    <div class="mt-10 bg-white p-6 rounded shadow">
        <h3 class="text-xl font-bold mb-4">Evolução do Peso</h3>
        <canvas id="graficoPesagens" height="100"></canvas>
    </div>

    {{-- Evolução Final --}}
    <div class="mt-6 bg-white shadow rounded p-6">
        <h3 class="text-xl font-semibold mb-4">Evolução Final</h3>
        @php
            $pesoInicial = $pesagens->first()?->peso;
            $pesoFinal = $pesagens->last()?->peso;
            $diferenca = $pesoFinal - $pesoInicial;
        @endphp

        @if($pesoInicial && $pesoFinal)
            <p>
                Evolução do peso: 
                <span class="{{ $diferenca < 0 ? 'text-green-600' : ($diferenca > 0 ? 'text-red-600' : '') }}">
                    {{ number_format($diferenca, 1) }} kg
                </span>
                (de {{ $pesoInicial }} kg para {{ $pesoFinal }} kg)
            </p>
        @else
            <p>Sem dados suficientes para calcular evolução.</p>
        @endif
    </div>
</div>

{{-- Script do gráfico --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('graficoPesagens').getContext('2d');

    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($pesagens->pluck('data_pesagem')->map(fn($d) => \Carbon\Carbon::parse($d)->format('d/m/Y'))) !!},
            datasets: [{
                label: 'Peso (kg)',
                data: {!! json_encode($pesagens->pluck('peso')) !!},
                fill: false,
                borderColor: '#ec4899',
                tension: 0.3,
                pointBackgroundColor: '#ec4899'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false,
                    title: {
                        display: true,
                        text: 'Peso (kg)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Data'
                    }
                }
            }
        }
    });
</script>
@endsection
