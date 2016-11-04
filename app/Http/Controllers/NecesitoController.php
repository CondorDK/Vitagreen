<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\Necesito;
use Session;

class NecesitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $necesito = Necesito::all();
        return view('necesito.index')->withNecesito($necesito);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('necesito.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validando la data
        $this->validate($request, array(
                'title' => 'required|max:225',
                'body'  => 'required'
            ));

        // store en la base de datos
        $necesito = new Necesito;

        $necesito->title = $request->title;
        $necesito->body = $request->body;

        $necesito->save();

        Session::flash('success', 'El mensaje se ha enviado correctamente!');

        return redirect()->route('necesito.show', $necesito->id);
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
    public function edit($id)
    {
        // busca los post en la database y guarda
        $necesito = Necesito::find($id);
        // devuelve la vista
        return view('necesito.edit')->withNecesito($necesito);
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
        // Validando la data
        $this->validate($request, array(
                'title' => 'required|max:225',
                'body'  => 'required'
            ));

        // Guarda la data en database
        $necesito = Necesito::find($id);

        $necesito->title = $request->input('title');
        $necesito->body = $request->input('body');

        $necesito->save();

        // Mensaje flash
        Session::flash('success', 'Se Ha Guardo Correctamente.');



        // redirect with flash data to necesito.show
        return redirect()->route('necesito.show', $necesito->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $necesito = Necesito::find($id);

        $necesito->delete();

        Session::flash('success', 'El Post Ha Sido Borrado Correctamente');
        return redirect()->route('necesito.index');
    }
}
