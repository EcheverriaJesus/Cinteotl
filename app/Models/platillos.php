<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreplatillos',
        'detalleplatillo',
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

    public function detalleplatillo()
    {
        return $this->belongsTo(Detalleplatillo::class);
    }

    public function detallereceta()
    {
        return $this->belongsTo(Detallereceta::class);
    }
}