<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
            'nome' => 'Fornecedor 1',
            'status' => 'N',
            'cnpj' => '123',
            'ddd' => '11',
            'telefone' => '0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',        
                'ddd' => '48',
                'telefone' => '0001'        
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',        
                'ddd' => '32',
                'telefone' => '0002'        
                ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
