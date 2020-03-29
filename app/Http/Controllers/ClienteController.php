<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Clientes;

class ClientesController extends Controller
{

    protected function validarCliente($request)
    {
        $validator = Validator::make($request->all(), [
            "nome" => "required",
            "email" => "required",
            "telefone" => "required | numeric"

        ]);
        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 8;
        $page = $request['page'] ?: 10;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        if ($buscar) {
            $cliente = DB::table('clientes')->where('nome', '=', $buscar)->paginate($qtd);
        } else {
            $cliente = DB::table('clientes')->paginate($qtd);
            echo : $buscar;
        }
        $cliente = $cliente->appends(Request::capture()->except('page'));
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarCliente($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $dados = $request->all();
        Cliente::create($dados);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.show', compact('Cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validarCliente($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $cliente = Cliente::find($id);
        $dados = $request->all();
        $cliente->update($dados);
        return redirect()->route('clientes.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('clientes.index');
    }


    public function remover($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.remove', compact('clientes'));
    }
}
