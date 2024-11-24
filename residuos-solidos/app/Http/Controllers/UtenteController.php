<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utente;

class UtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utentes = Utente::all();
        return view('utentes.index',compact('utentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('utentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=> 'required', 'email'=> 'required',
            'senha'=> 'required', 'confirma_senha'=> 'required',
         ]);

        Utente::create($request->all());
        return redirect()->route('utentes.index')->with('success','Utente adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utente $utente)
    {
        return view('utentes.edit',compact('utente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utente $utente)
    {
        $request->validate(['nome' => 'required','email'=> 'required','senha'=> 'required','confirma_senha'=> 'required',]);

        $utente->update($request->all());
        return redirect()->route('utentes.index')->with('success','Utente adicionado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utente $utente)
    {
        $utente->delete();
        return redirect()->route('utentes.index')->with('success','Utente excluido com sucesso!');
    }
}
