<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioLoginController extends Controller
{ public function pedidos()
    {
        // Exemplo de retorno de uma view
        return view('pedidos');
    }
    public function controleEstoque()
    {
        return view('controleEstoque');
    }

    public function visualizarPedidos()
    {
        return view('visualizarPedidos');
    }

    public function infoFuncionarios()
    {
        return view('infoFuncionarios');
    }

    public function showLoginForm()
    {
        return view('loginFuncionario');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $funcionario = DB::table('funcionarios')->where('username', $username)->first();

        if ($funcionario && $funcionario->password === $password) {
            session(['funcionario' => $funcionario]);
            return redirect()->route('menuFuncionario')->with('success', 'Login realizado com sucesso!');
        } else {
            return redirect()->route('loginFuncionario')->withErrors(['error' => 'Usuário ou senha inválidos.']);
        }
    }

    public function logout()
    {
        session()->forget('funcionario');
        return redirect()->route('loginFuncionario');
    }

    // Adicione este método
    public function menuFuncionario()
    {
        return view('menuFuncionario'); // Certifique-se de que a view 'menuFuncionario' existe
    }
}