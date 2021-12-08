<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto2=trim($request->input('texto2'));
        //$productos = product::all();

        $ventas1=DB::table('ventas') ->select("id","nombresV", "apellidosV", "telefonoV", "productosT","precioT")
                                            ->where("nombresV",'LIKE','%'.$texto2.'%' )
                                            ->orderBy('nombresV', 'asc')
                                            
                                            ->paginate(10);

        return view("ventas", compact('ventas1','texto2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vcrear'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas1= new ventas;
        $ventas1 ->nombresV=$request ->input('nombresV'); 
        $ventas1 ->apellidosV=$request ->input('apellidosV'); 
        $ventas1 ->telefonoV=$request ->input('telefonoV'); 
        $ventas1 ->productosT=$request ->input('productosT'); 
        $ventas1 ->precioT=$request ->input('precioT'); 
        
        $ventas1 ->save();
        return redirect()-> route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($ventas1)
    {
        $ventas1=ventas::findOrFail($ventas1);
        //return $usuarios;
        return view('veditar',compact('ventas1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $ventas1)
    {
        $ventas1= ventas::findOrFail($ventas1);
        $ventas1 ->nombresV=$request ->input('nombresV'); 
        $ventas1 ->apellidosV=$request ->input('apellidosV'); 
        $ventas1 ->telefonoV=$request ->input('telefonoV'); 
        $ventas1 ->productosT=$request ->input('productosT'); 
        $ventas1 ->precioT=$request ->input('precioT'); 
        
        $ventas1 ->save();
        return redirect()-> route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy( $ventas)
    {
        $ventas1=ventas::findOrFail($ventas);
        $ventas1->delete();
        return redirect()-> route('ventas.index');
    }
}
