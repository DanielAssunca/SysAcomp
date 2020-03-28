<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\clientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class clientesController extends Controller
{

    protected function validarclientes($request)
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
    public function index()
    {

        //public function index()
        {
            $clientes = clientes::all();
            return view('clientes.index', compact('clientes'));
        }
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
        $validator = $this->validarclientes($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        clientes::create($dados);
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
        $clientes = clientes::find($id);

        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
