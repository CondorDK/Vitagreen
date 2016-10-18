<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tengo;
use Session;

class TengoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $tengo = Tengo::all();
        return view('tengo.index')->withTengo($tengo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tengo.create');
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
        $tengo = new Tengo;

        $tengo->title = $request->title;
        $tengo->body = $request->body;

        $tengo->save();

        Session::flash('success', 'El mensaje se ha enviado correctamente!');

        return redirect()->route('tengo.show', $tengo->id);
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
    public function edit($id)
    {
        // busca los post en la database y guarda
        $tengo = Tengo::find($id);
        // devuelve la vista
        return view('tengo.edit')->withTengo($tengo);
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
        $tengo = Tengo::find($id);

        $tengo->title = $request->input('title');
        $tengo->body = $request->input('body');

        $tengo->save();

        // Mensaje flash
        Session::flash('success', 'Se Ha Guardo Correctamente.');



        // redirect with flash data to tengo.show
        return redirect()->route('tengo.show', $tengo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tengo = Tengo::find($id);

        $tengo->delete();

        Session::flash('success', 'El post ha sido borrado');
        return redirect()->route('tengo.index');
    }
}
