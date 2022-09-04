<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome_autor' => 'required|max:45',
            'nacao_autor' => 'required|max:45'
        ]);
        $service = Autor::create($validateData);
        return redirect ('/autores')->with('success', 'Autor cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autor = Autor::findOrFail($id);
        return view ('autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view ('autores.edit', compact('autor'));
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
        $validateData = $request->validate([
            'nome_autor' => 'required|max:45',
            'nacao_autor' => 'required|max:45'
        ]);
        Autor::whereId($id)->update($validateData);
        return redirect ('/autores')->with('success', 'Autor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servico = Autor::findOrFail($id);
        $servico->delete();
        return redirect ('/autores')->with('success', 'Autor excluído com sucesso!');
    }
}
