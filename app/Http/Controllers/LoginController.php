<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required'    => 'Campo Obrigatório',
            'email.email'       => 'Email inválido',
            'password.required' => 'Obrigatório senha'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        // Busca o usuário no banco de dados
        $user = DB::table('cadastros_user')->where('email', $email)->first();

        // Verifica se o usuário existe e se a senha está correta
        if ($user && $user->password === $password) {
            // Autenticação bem-sucedida
            // Aqui você pode definir a sessão do usuário manualmente
            session(['user' => $user]);
            return redirect('/home')->with('success', 'Login realizado com sucesso!');
        } else {
            // Falha na autenticação
            return redirect()->route('login.index')->withErrors(['error' => 'E-mail ou senha inválidos.']);
        }
    }

    public function destroy() {
        // Limpa a sessão do usuário
        session()->forget('user');
        return redirect()->route('login.index');
    }
}