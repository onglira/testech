<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use Illuminate\Support\Facades\DB;
use Redirect;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::paginate(10);
        return view('clientes.list', ['clientes' => $clientes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastro($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $cliente = DB::table('clientes')->where('id',$id)->first();
        return view('clientes.form', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());
        return Redirect::to('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();
        return Redirect::to('/clientes');
    }
}
