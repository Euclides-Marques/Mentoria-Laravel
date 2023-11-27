@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos Cadastrados</h5>
                    <p class="card-text">Total de Produtos Cadastrados no Sistema.</p>
                    <a href="#" class="btn btn-primary">{{ $totalProdutosCadastrados }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes Cadastrados</h5>
                    <p class="card-text">Total de Clientes Cadastrados no Sistema.</p>
                    <a href="#" class="btn btn-primary">{{ $totalClientesCadastrados }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas Cadastrados</h5>
                    <p class="card-text">Total de Vendas Cadastrados no Sistema.</p>
                    <a href="#" class="btn btn-primary">{{ $totalVendasCadastrados }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuários Cadastrados</h5>
                    <p class="card-text">Total de Usuários Cadastrados no Sistema.</p>
                    <a href="#" class="btn btn-primary">{{ $totalUsuariosCadastrados }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
