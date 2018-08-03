<?php

namespace hotelya;

use Illuminate\Database\Eloquent\Model;

class hoteles extends Model
{
    protected $table='hoteles';
    protected $primaryKey='idhoteles';
    protected $fillable = ['nombre','direccion','numeroHabitaciones','ciudad','departamento','created_at','updated_at'];
    public $timestamps = true;
}
