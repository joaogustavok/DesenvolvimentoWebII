<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livros/create');
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
            'nome_livro' => 'required|max:45',
            'nome_original' => 'required|max:75',
            'genero_livro' => 'required|max:25',
            'sinopse_livro' => 'nullable|max:500',
            'paginas_livro' => 'required|max:11',
            'anopub_livro' => 'required|max:11',
            'editora_livro' => 'required|max:11',
        ]);
        $service = Livro::create($validateData);
        return redirect('/livros')->with('success', 'Livro cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', compact('livro'));
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
            'nome_livro' => 'required|max:45',
            'nome_original' => 'required|max:75',
            'genero_livro' => 'required|max:25',
            'sinopse_livro' => 'nullable|max:500',
            'paginas_livro' => 'required|max:11',
            'anopub_livro' => 'required|max:11',
            'editora_livro' => 'required|max:11',
        ]);
        Livro::whereId($id)->update($validateData);
        return redirect('/livros')->with('success', 'Livro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Livro::findOrFail($id);
        $service->delete();
        return redirect('/livros')->with('success', 'Livro excluído com sucesso!');
    }
}
