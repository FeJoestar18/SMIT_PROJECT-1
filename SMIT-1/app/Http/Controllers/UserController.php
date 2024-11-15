<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  // Importando o modelo User para interagir com o banco de dados

class UserController extends Controller
{
    /**
     * Método para armazenar os dados do usuário no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos dados recebidos no formulário
        $request->validate([
            'name' => 'required|string|max:255',           // Nome é obrigatório, deve ser uma string e não exceder 255 caracteres
            'email' => 'required|email|unique:users,email', // Email é obrigatório, deve ser único na tabela 'users'
            'senha' => 'required|string|min:6',             // Senha é obrigatória e deve ter pelo menos 6 caracteres
            'cpf' => 'required|string|unique:users,cpf',     // CPF é obrigatório e único
            'telefone' => 'nullable|string',                 // Telefone é opcional, se fornecido deve ser uma string
            'endereco' => 'nullable|string',                 // Endereço é opcional, se fornecido deve ser uma string
        ]);

        // Criando um novo usuário com os dados recebidos do formulário
        User::create([
            'nome' => $request->input('name'),        // 'name' é o campo do formulário
            'email' => $request->input('email'),      // 'email' é o campo do formulário
            'senha' => bcrypt($request->input('senha')), // Criptografa a senha antes de armazenar
            'cpf' => $request->input('cpf'),          // 'cpf' é o campo do formulário
            'telefone' => $request->input('telefone'), // 'telefone' é o campo do formulário (opcional)
            'endereco' => $request->input('endereco'), // 'endereco' é o campo do formulário (opcional)
        ]);

        // Redireciona de volta para a página 'hello' com uma mensagem de sucesso
        return redirect('/hello')->with('success', 'Usuário criado com sucesso!');
    }
}
