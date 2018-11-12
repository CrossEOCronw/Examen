<?php

namespace App\Http\Controllers;

use App\Gato;
use Illuminate\Http\Request;

class GatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gato = Gato::get();
        return view('gatos.index')->with('gato',$gato);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fish.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gato = new Gato;
        $gato->nombre = $request->input('nombre');
        $gato->raza = $request->input('raza');
        $gato->color = $request->input('color');
        $gato->edad = $request->input('edad');
        $gato->peso = $request->input('peso');
        $gato->animal_id = $request->input('animal_id');
        $gato->save();

        echo 'La id: '.$gato;
        return redirect()->route('gato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gatos  $gatos
     * @return \Illuminate\Http\Response
     */
    /*public function show(Gatos $gatos)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gatos  $gatos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Gato::find($id);
        return view('gato.edit')->with('gatos',$p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gatos  $gatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $G = Fish::find($id);
        $G->nombre = $request->input('nombre');
        $G->raza = $request->input('raza');
        $G->color = $request->input('color');
        $G->edad = $request->input('edad');
        $G->peso = $request->input('peso');
        $G->animal_id = $request->input('animal_id');
        $G->save();
        return redirect()->route('gatos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gatos  $gatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gatos $gatos)
    {
        //
    }
}
