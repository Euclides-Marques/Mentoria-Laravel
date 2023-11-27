<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestUsuario;
use App\Models\Componentes;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findUsuario = $this->user->getUsuariosPesquisarIndex(search: $pesquisar ?? '');
        
        return view('pages.usuarios.paginacao', compact('findUsuario'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscarRegistro = User::find($id);
        $buscarRegistro->delete();
        
        return response()->json(['success'=>true]);
    }

    public function cadastrarUsuario(FormRequestUsuario $request)
    {
        if($request->method() == 'POST'){
            //criar os dados
            $data = $request -> all();
            $data['password'] = Hash::make($data['password']);
            User::create($data);

            Toastr::success('Gravado com Sucesso!');
            return redirect()->route('usuarios.index');
        }
        //mostrar os dados
        return view('pages.usuarios.create');
    }

    public function atualizarUsuario(FormRequestUsuario $request, $id)
    {
        if($request->method() == 'PUT'){
            //atualiza os dados
            $data = $request -> all();
            $data['password'] = Hash::make($data['password']);
            $buscarRegistro = User::find($id);
            $buscarRegistro->update($data);

            Toastr::success('Dados atualizados com sucesso.');
            return redirect()->route('usuarios.index');
        }
        //mostrar os dados
        $findUsuario = User::where('id', '=', $id)-> first();

        return view('pages.usuarios.atualiza', compact('findUsuario'));
    }
}
