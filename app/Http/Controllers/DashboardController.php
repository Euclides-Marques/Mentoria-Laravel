<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProdutosCadastrados = $this->buscaTotalProdutosCadastrados();
        $totalClientesCadastrados = $this->buscaTotalClientesCadastrados();
        $totalVendasCadastrados = $this->buscaTotalVendasCadastrados();
        $totalUsuariosCadastrados = $this->buscaTotalUsuariosCadastrados();
        return view('pages.dashboard.dashboard', compact('totalProdutosCadastrados', 'totalClientesCadastrados', 'totalVendasCadastrados', 'totalUsuariosCadastrados'));
    }

    public function buscaTotalProdutosCadastrados(){
        $findProdutos = Produto::all()->count();
        
        return $findProdutos;
    }

    public function buscaTotalClientesCadastrados(){
        $findClientes = Cliente::all()->count();
        
        return $findClientes;
    }

    public function buscaTotalVendasCadastrados(){
        $findVendas = Venda::all()->count();
        
        return $findVendas;
    }

    public function buscaTotalUsuariosCadastrados(){
        $findUsuarios = User::all()->count();
        
        return $findUsuarios;
    }
}