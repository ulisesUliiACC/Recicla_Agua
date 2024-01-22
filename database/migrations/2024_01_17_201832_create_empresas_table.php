<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('id_empresas');
            $table->string('clave');
            $table->string('industria');
            $table->string('descripcion');
            $table->integer('monitoreo');
            $table->string('descarga');
            $table->integer('horas');
            $table->string('tipo');
            $table->string('descarga_a');
            $table->string('DBO5');
            $table->integer('DQO');
            $table->integer('SST');
            $table->integer('ST');
            $table->integer('GYA');
            $table->integer('SAAM');
            $table->integer('NAK');
            $table->integer('NOK');
            $table->integer('NTK');
            $table->string('fenol');
            $table->string('color');
            $table->string('metales');
            $table->integer('CN');
            $table->integer('CR+6');
            $table->integer('CN-6');
            $table->integer('P-T');
            $table->integer('Cu');
            $table->integer('Ni');
            $table->integer('Cd');
            $table->integer('Zn');
            $table->integer('Pb');
            $table->integer('Cr');
            $table->integer('Fe');
            $table->integer('Ag');
            $table->integer('Al');
            $table->integer('Hg');
            $table->integer('As');
            $table->integer('Se');
            $table->integer('B');
            $table->integer('Sn');
            $table->string('coliformes_fecales_nmp');
            $table->string('coliformes_totales');
            $table->integer('ph');
            $table->integer('SDT');
            $table->integer('SSe');
            $table->string('conductividad');
            $table->string('alcalinidad');
            $table->string('giro_ind');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('atencion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
