<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = [
        'telefono',
        'internet',
        'cable',
        'ctelefono',
        'cinternet',
        'ccable',
        'total',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);//el movimiento pertenece al usuario ..
    }
}
