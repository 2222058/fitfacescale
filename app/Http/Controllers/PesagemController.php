<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Pesagem;
use Illuminate\Support\Facades\Auth;


class PesagemController extends Controller
{
     public function receiveName(Request $request)
    {
        $nome = $request->input('nome');

        // Guarda na base de dados ou log
        Pesagem::create([
            'nome' => $nome,
            'data_pesagem' => now()
        ]);

        return response()->json(['message' => 'Nome recebido com sucesso'], 201);
    }
   

    public function index()
{
    $pesagens = Auth::user()->pesagens()->orderBy('data_pesagem', 'desc')->paginate(10); // 10 itens por página
    return view('pesagens.index', compact('pesagens'));
}

    

}
