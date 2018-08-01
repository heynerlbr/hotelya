<?php

namespace hotelya;

use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    protected $table='reservas';
    protected $primaryKey='idreservas';
    protected $fillable = ['cantidadPesonas','tipohabitacion','fechaIngreso','fechaSalida'];
    public $timestamps = false;
}
