<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Tabela Usuarios',
                'url' => route('usuarios'),
                'active' => true
            ],
        ];
        return view('usuarios.index',[
            'breadcrumbItems' => $breadcrumbsItems,
            'pageTitle' => 'Tabela de usuarios']);
    }
}
