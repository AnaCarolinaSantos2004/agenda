<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use APP\Http\Requests\PessoaRequest;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.index', compact('pessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.create', compact('pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa -> nome = $request->input('sobrenome');
        $pessoa ->sobrenome = $request->input('sobrenome');
        $pessoa ->telefone = $request->input('telefone');
        $pessoa ->save();
        return redirect()-> view('pessoa.index', compact('pessoa'));


    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)) {
            return view('pessoa.edit', compact('pessoa'));

        }
            return view('pessoa.index');
    }


    public function update(PessoaRequest $request, $id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)) {
            $pessoa -> nome = $request->input('sobrenome');
            $pessoa ->sobrenome = $request->input('sobrenome');
            $pessoa ->telefone = $request->input('telefone');
            $pessoa ->save();
       }
        return redirect()->route ('pessoa.index', compact('pessoa'));
    }


    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa))
       {
           $pessoa->delete();
       }
        return redirect()->route('pessoa.index');
    }
}
