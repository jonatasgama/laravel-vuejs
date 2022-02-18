<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [ 
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => null, 'ddd' => '11', 'telefone' => '6437-6277'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'cnpj' => '1234', 'ddd' => '32', 'telefone' => '6437-6277'],
            2 => ['nome' => 'Fornecedor 3', 'status' => 'S', 'cnpj' => '1234', 'ddd' => '85', 'telefone' => '6437-6277']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
        //return view('app.fornecedor.index');
    }
}
