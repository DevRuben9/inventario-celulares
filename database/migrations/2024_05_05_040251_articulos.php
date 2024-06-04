<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('articulos', function(Blueprint $table){
            $table->bigIncrements('idArticulo');
            $table->string('idCategoria');
            $table->string('nombre');
            $table->string('precioVenta')->nullable();
            $table->string('stock')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('imagen');
            $table->tinyInteger('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
