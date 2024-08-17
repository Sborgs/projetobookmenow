<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function formLogin() {
        return view("admin.autenticacao.login");
    }

    public function login(Request $request) {

    }

    public function logout(Request $request) {
        
    }
}
