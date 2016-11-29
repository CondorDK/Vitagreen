<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ComoRequest;
use App\Como;
use Image;
use App\Categoria;

class ComoController extends Controller
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
        $como = Como::with('categoria')->get();
        return view('como.index',[
            'como' => $como
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
        return view('como.new')->withCategorias($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComoRequest $request)
    {
        // validando la data
        $this->validate($request, array(
                'title' => 'required|max:225',
                'body'  => 'required'
            ));

        // store en la base de datos
        $como = new Como;

        $como->title = $request->title;
        $como->body = $request->body;
        $como->categoria_id = $request->categoria_id;
        $user = \Auth::user();
        $como->user_id = $user->id;

        //guardar imagen
        if ($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $como->image = $filename;
        }

        $como->save();


        return redirect()->route('como.show', $como->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $como = Como::find($id);
        return view('como.show')->withComo($como);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Como $como)
    {
        $categorias = Categoria::all();
        return view('como.edit',[
            'como' => $como
            ])->withCategorias($categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Como $como)
    {
        // $this->authorize('owner', $como);
        $como->update($request->all());
        return redirect('/como')->with('success','Post actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Como $como)
    {
        // $this->authorize('owner', $como);
        $como->delete();
        return redirect('/como')->with('success','Post Eliminado correctamente');
    }
}
