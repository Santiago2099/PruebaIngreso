<?php

namespace App\Models\Programador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programador extends Model
{
    use HasFactory;
    protected $table='programador';
    protected $primaryKey='id';
    public $timestamps=true;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'lenguaje'
    ];
}
