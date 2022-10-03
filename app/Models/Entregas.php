<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregas extends Model
{    
    protected $primaryKey = "IdEntrega";
    protected $fillable = ['Nombre', 'Apellidos', 'Telefono', 'CorreoElectronico', 'Edad', 'Direccion', 'ComidaEntregada', 'Observacion'];
}
