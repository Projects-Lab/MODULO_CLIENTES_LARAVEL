<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{

    public function authorize(){
        return true; 
    }

    public function rules(){
        return [
            'numeroDocumento' => 'required|numeric',
            'tipoDocumento' => 'required',
            'primerApellido' => 'required',
            'segundoApellido' => 'required',
            'primerNombre' => 'required',
            'segundoNombre' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required|date',
            'edad' => 'required|numeric|min:1',
            'estadoCivil' => 'required',
            'ciudad' => 'required',
            'localidad' => 'required',
            'barrio' => 'required',
            'telefono' => 'required|numeric',
            'celular' => 'required|numeric',
            'nombreAseguradora' => 'required',
            'tipoVinculacion' => 'required',
            'ocupacion' => 'required',
            'nombreAcompañante' => 'required',
            'telefonoAcompañante' => 'required|numeric',
            'parentescoResponsable' => 'required',
            'telefonoResponsable' => 'required|numeric',
            'motivoConsulta' => 'required',
            'enfermedadActual' => 'required',
            'antecentePersonal' => 'required'
        ];
    }

   /* public function attributes(){
        return [
            'numeroDocumento' => 'NUMERO DE CEDULA'
        ];
    }

    public function messages(){
        return [
            'numeroDocumento.numeric' => 'Solo numeros'
        ];
    } */
}
