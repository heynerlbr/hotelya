<?php

namespace hotelya;

use Illuminate\Database\Eloquent\Model;

class registroHuespedes extends Model
{
    protected $table='registroHuespedes';
    protected $primaryKey='idregistroHuespedes';
    protected $fillable = ['documento','cantidadPesonas','tipohabitacion','fechaIngreso','fechaSalida'];
    public $timestamps = false;
}
