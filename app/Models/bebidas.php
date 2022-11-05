<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebidas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombrebebida',
        'detallebebida',
        'precio',
        'detallereceta',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function detallebebida()
    {
        return $this->belongsTo(Detallebebida::class);
    }

    public function detallereceta()
    {
        return $this->belongsTo(Detallereceta::class);
    }
}
