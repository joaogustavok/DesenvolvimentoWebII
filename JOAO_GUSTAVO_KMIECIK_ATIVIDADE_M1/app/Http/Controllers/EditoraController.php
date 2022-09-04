<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoras = Editora::all();
        return view('editoras.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('editoras/create');
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
            'nome_editora' => 'required|max:45',
            'estado_editora' => 'required|max:11',
        ]);
        $service = Editora::create($validateData);
        return redirect('/editoras')->with('success', 'Editora cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.show', compact('editora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editoras.edit', compact('editora'));
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
            'nome_editora' => 'required|max:45',
            'estado_editora' => 'required|max:11',
        ]);
        Editora::whereId($id)->update($validateData);
        return redirect('/editoras')->with('success', 'Editora atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Editora::findOrFail($id);
        $service->delete();
        return redirect('/editoras')->with('success', 'Editora excluida com sucesso!');
    }
}
