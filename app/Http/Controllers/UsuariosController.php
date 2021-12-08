<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        
        $texto=trim($request->input('texto'));
        //$listusuarios = Usuarios::All();

        $listusuarios=DB::table('usuarios') ->select("id","nombres", "apellidos", "correoE", "contrasena","telefono","edad","direccion")
                                            ->where("nombres",'LIKE','%'.$texto.'%' )
                                            ->orderBy('nombres', 'asc')
    
                                            ->paginate(10);

        return view("usuarios", compact('listusuarios','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios= new Usuarios;
        $usuarios ->nombres=$request ->input('nombres'); 
        $usuarios ->apellidos=$request ->input('apellidos'); 
        $usuarios ->correoE=$request ->input('correoE'); 
        $usuarios ->contrasena=$request ->input('contrasena'); 
        $usuarios ->telefono=$request ->input('telefono'); 
        $usuarios ->edad=$request ->input('edad'); 
        $usuarios ->direccion=$request ->input('direccion'); 
        $usuarios ->save();
        return redirect()-> route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($usuarios)
    {
        $usuarios=Usuarios::findOrFail($usuarios);
        //return $usuarios;
        return view('editar',compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $usuarios)
    {
        $usuarios= Usuarios::findOrFail($usuarios);
        $usuarios ->nombres=$request ->input('nombres'); 
        $usuarios ->apellidos=$request ->input('apellidos'); 
        $usuarios ->correoE=$request ->input('correoE'); 
        $usuarios ->contrasena=$request ->input('contrasena'); 
        $usuarios ->telefono=$request ->input('telefono'); 
        $usuarios ->edad=$request ->input('edad'); 
        $usuarios ->direccion=$request ->input('direccion'); 
        $usuarios ->save();
        return redirect()-> route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuarios)
    {
        $usuarios=Usuarios::findOrFail($usuarios);
        $usuarios->delete();
        return redirect()-> route('usuarios.index');
    }
}
