<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecharegistro',
        'fechareservada',
        'usuarios',
        'mesas',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecharegistro' => 'datetime',
        'fechareservada' => 'datetime',
    ];

    public function usuarios()
    {
        return $this->belongsTo(Usuarios::class);
    }

    public function mesas()
    {
        return $this->belongsTo(Mesas::class);
    }
}
