<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar as Contas
    public function index()
    {
        // Carregar uma view
        return view("contas.index");
    }

    // Detalhes da Conta
    public function create()
    {
        // Carregar uma view
        return view("contas.create");
    }

    // Carregar o formulário cadastrar nova conta
    public function store()
    {
        dd("Cadastrar");
    }

    // Cadastrar no banco de dados nova conta
    public function show()
    {
        // Carregar uma view
        return view("contas.show");
    }

    // Carregar o formulário editar conta
    public function edit()
    {
        // Carregar uma view
        return view("contas.edit");
    }

    // Editar no banco de dados a conta
    public function update()
    {
        dd("Editar");
    }

    // Excluir a conta do banco de dados
    public function destroy()
    {
        // Carregar uma view
        dd ("Apagar");
    }
}
