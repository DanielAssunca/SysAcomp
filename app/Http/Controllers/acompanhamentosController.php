<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\acompanhamentos;
use App\clientes;
use App\contatos;
use App\eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class acompanhamentosController extends Controller
{
    //protected function validaracompanhamentos($request)
    //{
      //  $validator = Validator::make($request->all(), [
          //  "nome" => "required",
           // "email" => "required"


      //  ]);
       // return $validator;
   // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $clientes = clientes::all();
        return view('acompanhamentos.create', compact('clientes'));

        //$eventos = eventos::all(clientes_eventos_id->$clienteid);
       // return view('acompanhamentos.create', compact('eventos'));
    }

    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 4;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        if ($buscar) {
            $acompanhamentos = DB::table('acompanhamentos')->where('nome', 'ilike', '%' . $buscar . '%')->paginate($qtd);
        } else {
            $acompanhamentos = DB::table('acompanhamentos')->paginate($qtd);
        }
        $acompanhamentos = $acompanhamentos->appends(Request::capture()->except('page'));
        return view('acompanhamentos.index', compact('acompanhamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $validator = $this->validaracompanhamentos($request);
        //if ($validator->fails()) {
          //  return redirect()->back()->withErrors($validator->errors());
       // }

        $dados = $request->all();
        acompanhamentos::create($dados);
        return redirect()->route('acompanhamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acompanhamentos = acompanhamentos::find($id);

        return view('acompanhamentos.show', compact('acompanhamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acompanhamentos = acompanhamentos::find($id);
        return view('acompanhamentos.edit', compact('acompanhamentos'));
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
        $validator = $this->validaracompanhamentos($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $acompanhamentos = acompanhamentos::find($id);
        $dados = $request->all();
        $acompanhamentos->update($dados);
        return redirect()->route('acompanhamentos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        acompanhamentos::find($id)->delete();
        return redirect()->route('acompanhamentos.index');
    }


    public function remover($id)
    {
        $acompanhamentos = acompanhamentos::find($id);

        return view('acompanhamentos.remove', compact('acompanhamentos'));
    }
}
