<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function store(Request $request)
    {
        // Validar o nome
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Salvar o nome ou qualquer outra ação
        // Por exemplo, se quiser salvar no banco:
        // Person::create($validated);

        // Retornar uma resposta de sucesso
        return response()->json(['message' => 'Nome recebido com sucesso!', 'data' => $validated], 200);
    }


     public function show()
    {
        $name = session('name', 'Nenhum nome foi enviado');
        
        return view('person.show', compact('name'));
    }
}
