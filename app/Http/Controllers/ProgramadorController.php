<?php

namespace App\Http\Controllers;
use App\Models\Programador\Programador;
use Illuminate\Http\Request;

class ProgramadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programador = Programador::all();
        $success =  0;
        return view('Programador.index', compact('programador', 'success'));
    }
    public function view()
    {
        $error = 0;
        return view('Programador.create', compact('error'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'nombre' => ['required', 'unique:programador,nombre'],
            'apellido' => ['required', 'unique:programador,apellido'],
            'cedula' => ['required', 'unique:programador,cedula'],
            'correo' => ['required', 'email', 'unique:programador,correo'],
            'lenguaje' => 'required',
        ]);
            $progra = new Programador;
            $progra->nombre = $request->nombre;
            $progra->apellido = $request->apellido;
            $progra->cedula = $request->cedula;
            $progra->correo = $request->correo;
            $progra->lenguaje = $request->lenguaje;
            $progra->save();
            $success = 1;
            $programador = Programador::all();

            return view('Programador.index', compact('programador', 'success'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
