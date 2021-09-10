<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cliente extends Model
{
	use HasFactory;
	protected $fillable = [
		'numeroDocumento',
		'tipoDocumento',
		'primerApellido',
		'segundoApellido',
		'primerNombre',
		'segundoNombre',
		'sexo',
		'fechaNacimiento',
		'edad',
		'estadoCivil',
		'ciudad',
		'localidad',
		'barrio',
		'telefono',
		'celular',
		'nombreAseguradora',
		'tipoVinculacion',
		'ocupacion',
		'nombreAcompañante',
		'telefonoAcompañante',
		'parentescoResponsable',
		'telefonoResponsable',
		'motivoConsulta',
		'enfermedadActual',
		'antecentePersonal'
	];
}
