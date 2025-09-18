<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleOrden extends Model
{
    use HasFactory;

    protected $fillable = ['orden_id', 'servicio_id', 'cantidad', 'subtotal', 'total'];

    protected $table = 'detalle_ordenes';

    public function orden()
    {
        return $this->belongsTo(Orden::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }
}
