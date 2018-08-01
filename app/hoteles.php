<?php

namespace hotelya;

use Illuminate\Database\Eloquent\Model;

class hoteles extends Model
{
    protected $table='hoteles';
    protected $primaryKey='idhoteles';
    protected $fillable = ['nombre','direccion','numeroHabitaciones','created_at','updated_at'];
    public $timestamps = true;
}
