<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreusuario',
        'contraseña',
        'tipo',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function reservaciones()
    {
        return $this->belongsTo(Reservaciones::class);
    }

    public function ventas()
    {
        return $this->belongsTo(Ventas::class);
    }
}
