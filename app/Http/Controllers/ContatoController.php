<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    /**
     * Exibe o formulário de contato.
     *
     * @return \Illuminate\View\View
     */
    public function exibirFormulario()
    {
        return view('contato.index');
    }

    /**
     * Processa o envio do formulário de contato e envia um e-mail (versão simplificada).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function enviarFormulario(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensagem' => 'required|string',
        ]);

        $para = env('MAIL_FROM_ADDRESS'); // Use o mesmo endereço para simplificar

        $assunto = 'Nova Mensagem de Contato do Site';

        $mensagemTexto = "Nome: " . $request->input('nome') . "\n"
                         . "E-mail: " . $request->input('email') . "\n"
                         . "Mensagem:\n" . $request->input('mensagem');

        Mail::raw($mensagemTexto, function ($message) use ($para, $assunto) {
            $message->to($para)->subject($assunto);
        });

        return "Mensagem enviada com sucesso!";
    }
}