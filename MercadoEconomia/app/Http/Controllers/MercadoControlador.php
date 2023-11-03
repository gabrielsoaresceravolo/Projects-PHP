<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MercadoControlador extends Controller
{
    public function index()
    {
        return view('home');
    }

    // ========================================================

    public function estoque()
    {
        $produto = [
            [
                'nome' => 'Maçã',
                'preco' => 5,
                'tipo' => ['Alimento', 'Fruta']
            ],
            [
                'nome' => 'Banana',
                'preco' => 15,
                'tipo' => ['Alimento', 'Fruta']
            ],
            [
                'nome' => 'Carne',
                'preco' => 350,
                'tipo' => ['Alimento', 'Animal']
            ],
            [
                'nome' => 'Detergente',
                'preco' => 45,
                'tipo' => ['Limpeza']
            ],
        ];

        return view('estoque', ['produtos' => $produto]);
    }

    public function funcionarios()
    {
        $funcionariosINFO = [
            [
                'nome' => 'Robertão',
                'nascimento' => Carbon::createFromDate(1960, 5, 15),
                'email' => 'robertão1960@gmail.com',
                'telefone' => 18981456884,
            ],
            [
                'nome' => 'Marcos',
                'nascimento' => Carbon::createFromDate(1980, 2, 20),
                'email' => 'marcosCebola@gmail.com',
                'telefone' => 18989888991,
            ],
        ];
        return view('funcionarios',['funcionariosINFO' => $funcionariosINFO]);
    }

    public function fornecedores()
    {
        $fornecedoresINFO = [
            [
                'nome' => 'Chuveirão Das Tintas',
                'endereco' => 'Rua do Logo ali',
                'email' => 'chuveiroTintas@gmail.com',
                'telefone' => 18988981156,
                'produto' => ['Tintas']
            ],
            [
                'nome' => 'Miguel Santo Leiteiro',
                'endereco' => 'Rua do Santo Grego',
                'email' => 'miguelSL@gmail.com',
                'telefone' => 18989849544,
                'produto' => ['Leite', 'Queijo']
            ],
        ];

        return view('fornecedores',['fornecedoresINFO' => $fornecedoresINFO]);
    }
}