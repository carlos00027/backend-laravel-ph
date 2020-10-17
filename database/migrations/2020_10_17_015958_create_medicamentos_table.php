<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('medicamentos');

        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string("expediente");
            $table->string("producto");
            $table->string("titular");
            $table->string("registrosanitario")->nullable();
            $table->string("fecha_expedicion")->nullable();
            $table->string("fecha_vencimiento")->nullable();
            $table->string("estadoregistro")->nullable();
            $table->string("expedientecum")->nullable();
            $table->string("consecutivocum")->nullable();
            $table->string("cantidadcum")->nullable();
            $table->string("descripcioncomercial")->nullable();
            $table->string("estadocum",555)->nullable();
            $table->string("fecha_inactivo",1555)->nullable();
            $table->string("muestramedica",555)->nullable();
            $table->string("unidad")->nullable();
            $table->string("atc")->nullable();
            $table->string("descripcionatc")->nullable();
            $table->string("viaadministracion")->nullable();
            $table->string("concentracion")->nullable();
            $table->string("principioactivo")->nullable();
            $table->string("unidadmedida")->nullable();
            $table->string("cantidad",555)->nullable();
            $table->string("unidadreferencia",555)->nullable();
            $table->string("formafarmaceutica")->nullable();
            $table->string("nombrerol")->nullable();
            $table->string("tiporol")->nullable();
            $table->string("modalidad")->nullable();
            $table->string("columnaa")->nullable();
            $table->string("columnab")->nullable();
            $table->string("columnac")->nullable();
            $table->string("columnad")->nullable();
            $table->string("columnae")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos');
    }
}
