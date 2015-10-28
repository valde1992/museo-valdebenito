<?php

namespace App\Http\Controllers;

use App\Pieza;
use Request;
use App\Http\Controllers\Controller;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas = Pieza::all();
        return view('piezas.index', compact('piezas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piezas = Pieza::all();
        
        return view('piezas.create', compact('piezas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        /*$this->validate($request, [
            
        ]);*/
        
        
        $piezas = Request::all();
        
        Pieza::create($piezas);
        
        return redirect('piezas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pieza = Pieza::find($id);      
        return view('piezas.show', compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pieza = Pieza::find($id);
        return view('piezas.edit', compact('pieza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        /*$this->validate($request, [
            'estado' => 'required',
            'descripcion' => 'max:200',
            'fecharealizacionpieza' => 'date',
            'fechaultimamodificacionpieza' => 'date|after:'.$despuesde.'|before:'.$antesde,
        ]);*/
        
        $piezaUpdate = Request::all();
        
        $pieza = Pieza::find($id);
        
        $pieza->update($piezaUpdate);
        
        return redirect('piezas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pieza::find($id)->delete();
        
        return redirect('piezas');
    }
}
