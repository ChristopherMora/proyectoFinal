<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto1=trim($request->input('texto1'));
        //$productos = product::all();

        $productos=DB::table('productos') ->select("id","nombreP", "cantidad", "talla", "precio","color")
                                            ->where("nombreP",'LIKE','%'.$texto1.'%' )
                                            ->orderBy('nombreP', 'asc')
                                            
                                            ->paginate(10);

        return view("rproducto", compact('productos','texto1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pcrear'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos= new product;
        $productos ->nombreP=$request ->input('nombreP'); 
        $productos ->cantidad=$request ->input('cantidad'); 
        $productos ->talla=$request ->input('talla'); 
        $productos ->precio=$request ->input('precio'); 
        $productos ->color=$request ->input('color'); 
        
        $productos ->save();
        return redirect()-> route('rproducto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($productos)
    {
        $productos=product::findOrFail($productos);
        //return $usuarios;
        return view('peditar',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $productos)
    {
        $productos= product::findOrFail($productos);
        $productos ->nombreP=$request ->input('nombreP'); 
        $productos ->cantidad=$request ->input('cantidad'); 
        $productos ->talla=$request ->input('talla'); 
        $productos ->precio=$request ->input('precio'); 
        $productos ->color=$request ->input('color');
        $productos ->save();
        return redirect()-> route('rproducto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($productos)
    {
        $productos=product::findOrFail($productos);
        $productos->delete();
        return redirect()-> route('rproducto.index');
    }
}
