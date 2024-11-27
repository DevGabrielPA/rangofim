<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\FuncionarioLoginController; // Certifique-se de que este controlador existe
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'quickBite')->name('quickBite');
Route::view('/home', 'home')->name('home');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::post('/cadastros/salvar', [CadastroController::class, 'store']);
Route::view('/cardapio', 'cardapio')->name('cardapio');
Route::view('/contato', 'contato')->name('contato');
Route::view('/carrinho', 'carrinho')->name('carrinho');

// Rotas de Usuário
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

// Rotas de Funcionário
Route::controller(FuncionarioLoginController::class)->group(function() {
    Route::get('/loginFuncionario', 'showLoginForm')->name('loginFuncionario');
    Route::post('/loginFuncionario', 'login')->name('loginFuncionario.store');
    Route::get('/menuFuncionario', 'menuFuncionario')->name('menuFuncionario');
       // Rotas para as páginas adicionais
       Route::get('/controleEstoque', 'controleEstoque')->name('controleEstoque');
       Route::get('/pedidos', 'pedidos')->name('pedidos');
       Route::get('/infoFuncionarios', 'infoFuncionarios')->name('infoFuncionarios');
});

Route::post('/logoutFuncionario', [FuncionarioLoginController::class, 'logout'])->name('logoutFuncionario');

