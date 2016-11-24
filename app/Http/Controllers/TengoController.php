<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TengoRequest;
use App\Tengo;
use App\Categoria;

class TengoController extends Controller
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
        $teng = Tengo::where('user_id', $request->user()->id)->get();
        return view('tengo.index',[
            'teng' => $teng
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
        return view('tengo.new')->withCategorias($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TengoRequest $request)
    {
        $request->user()->tengos()->create($request->all());
        return redirect()->route('tengo.show', $request->id)->with('success','Post creado correctamente :3');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tengo = Tengo::find($id);
        return view('tengo.show')->withTengo($tengo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tengo $tengo)
    {
        $categorias = Categoria::all();
        return view('tengo.edit',[
            'tengo' => $tengo
            ])->withCategorias($categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tengo $tengo)
    {
        $this->authorize('owner', $tengo);
        $tengo->update($request->all());
        return redirect('/tengo')->with('success','Post actualizado correctamente :3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tengo $tengo)
    {
        $this->authorize('owner', $tengo);
        $tengo->delete();
        return redirect('/tengo')->with('success','Post Eliminado correctamente :3');
    }
}
