<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function enviarMensagem(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
        ]);

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}