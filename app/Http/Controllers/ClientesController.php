<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Models\Cliente;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');
        
        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = Cliente::find($id);
        $buscarRegistro->delete();
        
        return response()->json(['success'=>true]);
    }

    public function cadastrarCliente(FormRequestClientes $request)
    {
        if($request->method() == 'POST'){
            //criar os dados
            $data = $request -> all();
            Cliente::create($data);

            Toastr::success('Gravado com Sucesso!');
            return redirect()->route('clientes.index');
        }
        //mostrar os dados
        return view('pages.clientes.create');
    }

    public function atualizarCliente(FormRequestClientes $request, $id)
    {
        if($request->method() == 'PUT'){
            //atualiza os dados
            $data = $request -> all();
            $buscarRegistro = Cliente::find($id);
            $buscarRegistro->update($data);

            Toastr::success("Dados atualizados com sucesso.");
            return redirect()->route('clientes.index');
        }
        //mostrar os dados
        $findCliente = Cliente::where('id', '=', $id)-> first();

        return view('pages.clientes.atualiza', compact('findCliente'));
    }
}
