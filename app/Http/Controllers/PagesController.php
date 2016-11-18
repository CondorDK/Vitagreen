<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Como;

Class PagesController extends Controller {

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $como = Como::orderBy('id', 'desc')->limit(3)->get();
        return view('pages.welcome')->withComo($como);
    }

    public function getMaterial()
    {
        return view('pages.materiales');
    }

    public function getAcercaDe()
    {
        return view('pages.acercade');
    }

    public function getServicios()
    {
        return view('pages.servicios');
    }

    public function getContacto()
    {
        return view('pages.contacto');
    }

}
