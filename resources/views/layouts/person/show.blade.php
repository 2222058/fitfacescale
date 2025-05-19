@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-4">Nome Recebido</h2>

    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Nome Enviado:</h3>
        <p class="text-lg">{{ $name }}</p>
    </div>
</div>
@endsection
