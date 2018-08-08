<?php

namespace hotelya\Http\Controllers;

use Illuminate\Http\Request;
use hotelya\hoteles;
use hotelya\habitaciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        //$habitaciones=habitaciones::all(); 

        $habitaciones = DB::table('habitaciones')
            ->join('hoteles', 'habitaciones.hoteles_idhoteles', '=', 'hoteles.idhoteles')
            ->join('users', 'users.id', '=', 'hoteles.user_id')
            ->select('habitaciones.*')
            ->where('user_id',$id)
            ->get();

        //dd($habitaciones);
        //exit();
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
        $id = Auth::id();
       
        
        //saber si llegan datos  de la tabla hoteles
        //echo('<pre>');
        //var_dump($ultimo["numeroHabitaciones"]);
        //exit();
        \hotelya\hoteles::create([
            'nombre'=>$request['nombre'],
            'direccion'=>$request['direccion'],
            'numeroHabitaciones'=>$request['numeroHabitaciones'],
            'ciudad'=>$request['ciudad'],
            'departamento'=>$request['departamento'],
            'user_id'=>$id
        ]);
        $hoteles=hoteles::all();
        $ultimo=$hoteles->last();
        $ultimoid=$hoteles->last();
        $cantidad=$ultimo["numeroHabitaciones"];
        $id=$ultimoid["idhoteles"];

        for ($i = 1; $i <= $cantidad; $i++) {
            habitaciones::create([                
                'numeroHabitacion'=>'0',
                'estado'=>'libre',
                'tipo'=>'ventilador',
                'precio'=>'0', 
                'hoteles_idhoteles'=>$id           
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
