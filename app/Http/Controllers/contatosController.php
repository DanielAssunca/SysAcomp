<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Validator;
use App\contatos;
use App\eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class contatosController extends Controller
{

    protected function validarcontatos($request)
    {
        $validator = Validator::make($request->all(), [
            "nome" => "required",
            "email" => "required"


        ]);
        return $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $eventos = eventos::all();
        return view('contatos.create', compact('eventos'));
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
            $contatos = DB::table('contatos')->where('nome', 'ilike', '%'.$buscar.'%')->paginate($qtd);
        } else {
            $contatos = DB::table('contatos')->paginate($qtd);
        }
        $contatos = $contatos->appends(Request::capture()->except('page'));
        return view('contatos.index', compact('contatos'));
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
        $validator = $this->validarcontatos($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        contatos::create($dados);
        return redirect()->route('contatos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contatos = contatos::find($id);

        return view('contatos.show', compact('contatos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contatos = contatos::find($id);
        return view('contatos.edit', compact('contatos'));
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
        $validator = $this->validarcontatos($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $contatos = contatos::find($id);
        $dados = $request->all();
        $contatos->update($dados);
        return redirect()->route('contatos.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contatos::find($id)->delete();
        return redirect()->route('contatos.index');
    }


    public function remover($id)
    {
        $contatos = contatos::find($id);

        return view('contatos.remove', compact('contatos'));
    }
}
