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
          $table->string('industria');
          $table->string('clave')->unique();
          $table->integer('monitoreo');
          $table->string('descarga');
          $table->integer('horas');
          $table->string('tipo');
          $table->string('descarga_a');
          $table->string('giro');
          $table->string('direccion');
          $table->string('numero');
          $table->string('atencion');
          $table->string('DBO5')->nullable();
          $table->string('DQO')->nullable();
          $table->string('SST')->nullable();
          $table->string('ST')->nullable();
          $table->string('GYA')->nullable();
          $table->string('SAAM')->nullable();
          $table->string('NAK')->nullable();
          $table->string('NOK')->nullable();
          $table->string('NTK')->nullable();
          $table->string('fenol')->nullable();
          $table->string('color')->nullable();
          $table->string('metales')->nullable();
          $table->string('CN')->nullable();
          $table->string('CR_6')->nullable();
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
