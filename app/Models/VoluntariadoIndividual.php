<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoluntariadoIndividual extends Model
{
    use HasFactory; 

    protected $table = 'individual_volunteers';
	protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = [
        'Id','Nombre', 'DNI', 'Ape1', 'Ape2', 'Cantidad', 'TipoVoluntariado', 'Email', 'Fecha', 'Pais', 'Procedencia', 'NombreProcedencia', 'Telefono', 'Detalle'
    ];
}
