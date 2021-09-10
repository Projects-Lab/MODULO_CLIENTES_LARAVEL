<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIntegerToStringClientesTable extends Migration{
    
    public function up(){
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('numeroDocumento')->change();
            $table->string('telefono')->nullable()->change();
            $table->string('celular')->change();
            $table->string('telefonoAcudiente')->change();
            $table->string('telefonoParentesco')->change();
        });
    }

}
