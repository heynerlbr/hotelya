<?php

namespace hotelya\Http\Controllers;

use Illuminate\Http\Request;
use hotelya\hoteles;
use hotelya\habitaciones;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones=habitaciones::all();
        return view('hoteles.index',compact('habitaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hoteles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //saber si llegan datos  de la tabla hoteles
        //echo('<pre>');
        //var_dump($ultimo["numeroHabitaciones"]);
        //exit();
        \hotelya\hoteles::create([
            'nombre'=>$request['nombre'],
            'direccion'=>$request['direccion'],
            'numeroHabitaciones'=>$request['numeroHabitaciones'],
            'ciudad'=>$request['ciudad'],
            'departamento'=>$request['departamento']
        ]);
        $hoteles=hoteles::all();
        $ultimo=$hoteles->last();
        $cantidad=$ultimo["numeroHabitaciones"];

        for ($i = 1; $i <= $cantidad; $i++) {
            habitaciones::create([                
                'numeroHabitacion'=>'0',
                'estado'=>'libre',
                'tipo'=>'ventilador',
                'precio'=>'0',             
            ]);
        }

        return redirect('/hotel')->with('message','store');
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
