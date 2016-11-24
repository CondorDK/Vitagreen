<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\NecesitoRequest;
use App\Necesito;
use App\Categoria;
class NecesitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $necesit = Necesito::where('user_id', $request->user()->id)->get();
        return view('necesito.index',[
            'necesit' => $necesit
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('necesito.new')->withCategorias($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NecesitoRequest $request)
    {
        $request->user()->necesitos()->create($request->all());
        return redirect()->route('necesito.show', $request->id)->with('success','Post creado correctamente :3');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $necesito = Necesito::find($id);
        return view('necesito.show')->withNecesito($necesito);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Necesito $necesito)
    {
        $categorias = Categoria::all();
        return view('necesito.edit',[
            'necesito' => $necesito
            ])->withCategorias($categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Necesito $necesito)
    {
        $this->authorize('owner', $necesito);
        $necesito->update($request->all());
        return redirect('/necesito')->with('success','Post actualizado correctamente :3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Necesito $necesito)
    {
        $this->authorize('owner', $necesito);
        $necesito->delete();
        return redirect('/necesito')->with('success','Post Eliminado correctamente :3');
    }
}
