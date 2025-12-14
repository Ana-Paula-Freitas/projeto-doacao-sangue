<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doador;

class DoadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doador = Doador::all();
        return view('doador/index')->with('doador', $doador);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Doador::create([
        'cpf'=> $request->cpf,
        'rg' => $request->rg,
        'nome' => $request->nome,
        'email' => $request->email,
        'senha'=> $request->senha,
        'cidade' => $request->cidade,
        'uf' => $request->uf,
        'cep' => $request->cep,
        'logradouro' => $request->logradouro,
        'numero' => $request->numero,
        'bairro' => $request->bairro,
        'telefone' => $request->telefone,
        'data_nascimento' => $request->data_nacimento,
        'peso' => $request->peso,
        'tipo_sanguineo' => $request->tipo_sanguineo,
        'profissao'=> $request->profissao,
        'sexo' => $request->sexo
        ]);

        return redirect()->route('index.doador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doador = Doador::find($id);

        return view('doador/show')->with('doador', $doador);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doador = Doador::findOrFail($id);

        return view('doadres.update')
        ->with(['doador', $doador]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doador = Doador::findOrFail($id);

        $doador->update([
            'cpf'=> $request->cpf,
            'rg' => $request->rg,
            'nome' => $request->nome,
            'email' => $request->email,
            'senha'=> $request->senha,
            'cidade' => $request->cidade,
            'uf' => $request->uf,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nacimento,
            'peso' => $request->peso,
            'tipo_sanguineo' => $request->tipo_sanguineo,
            'profissao'=> $request->profissao,
            'sexo' => $request->sexo
        ]);

        return redirect()->route('doadores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $doador = Doador::findOrFail($id);

        $doador->delete();
        return redirect()->route('doador.index');
    }
}