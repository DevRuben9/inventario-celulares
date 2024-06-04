<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('usuarios', function(Blueprint $table){
            $table->bigIncrements('idUsuario');
            $table->unsignedBigInteger('idRol');
            $table->string('nombre');
            $table->string('tipoDocumento')->nullable();
            $table->string('numDocumento')->nullable();
            $table->string('password');
            $table->tinyInteger('estado');
            $table->timestamps();
            
            $table->foreign('idRol')->references('idRol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
