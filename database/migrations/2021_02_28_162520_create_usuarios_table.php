<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration{

    public function up(){
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipoDocumento');
            $table->integer('numeroDocumento');
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('sexo');
            $table->date('fechaNacimiento');
            $table->integer('edad');
            $table->string('estadoCivil');
            $table->string('ciudad');
            $table->string('localidad');
            $table->string('barrio');
            $table->integer('telefono')->nullable();;
            $table->integer('celular');
            $table->string('nombreAseguradora');
            $table->string('tipodeVinculacion');
            $table->string('ocupacion');
            $table->string('nombreAcudiente');
            $table->string('telefonoAcudiente');
            $table->string('parentescoAcudiente');
            $table->string('telefonoParentesco');
            $table->text('motivoConsulta');
            $table->text('emfermedadActual');
            $table->text('antecedentePersonal');
            $table->timestamps();
        });
    }


    public function down(){
        Schema::dropIfExists('usuarios');
    }
}
