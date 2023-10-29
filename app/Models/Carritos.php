<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carritos extends Model
{
    use HasFactory;
    protected $guarded = ['id','importe'];
    protected $hidden = [
        'usuario_id',
        'finalizado',
        'created_at',
        'updated_at'
    ];
}
