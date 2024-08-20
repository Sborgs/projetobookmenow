<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function formLogin() {
        return view("admin.autenticacao.login");
    }

    public function login(Request $request) {

        $dadosUsuario = $request->validate([
            "email" => ['required', 'email'],
            "password" => "required",
        ]);

        if (auth::attempt($dadosUsuario)) {
            $request->session()->regenerate();
            return redirect()->intended("/admin/dashboard");
        }

        return redirect()->back()->withErrors(["email" => "Usuário ou Senha Inválido"]);

    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");

    }
}
