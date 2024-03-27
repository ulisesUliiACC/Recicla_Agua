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
        Schema::create('parametros', function (Blueprint $table) {
          $table->id();
          $table->decimal('DBO_5', 10, 8)->nullable();
          $table->decimal('DQO', 10, 8)->nullable();
          $table->decimal('SST', 10, 3)->nullable();
          $table->decimal('St', 10, 3)->nullable();
          $table->decimal('G_y_A1', 10, 3)->nullable();
          $table->decimal('G_y_A2', 10, 3)->nullable();
          $table->decimal('G_y_A3', 10, 3)->nullable();
          $table->decimal('G_y_A4', 10, 3)->nullable();
          $table->decimal('G_y_A5', 10, 3)->nullable();
          $table->decimal('G_y_A6', 10, 3)->nullable();
          $table->decimal('G_y_A_PP', 10, 3)->nullable();
          $table->decimal('SAAM', 10, 3)->nullable();
          $table->decimal('NOK', 10, 3)->nullable();
          $table->decimal('NAK', 10, 3)->nullable();
          $table->decimal('NTK', 10, 3)->nullable();
          $table->decimal('FENOL', 10, 3)->nullable();
          $table->decimal('COLOR', 10, 3)->nullable();
          $table->decimal('Cr+6', 10, 3)->nullable();
          $table->decimal('CN', 10, 3)->nullable();
          $table->decimal('PT', 10, 3)->nullable();
          $table->decimal('Cu', 10, 3)->nullable();
          $table->decimal('Ni', 10, 3)->nullable();
          $table->decimal('Cd', 10, 3)->nullable();
          $table->decimal('Zn', 10, 3)->nullable();
          $table->decimal('Pb', 10, 3)->nullable();
          $table->decimal('Cr', 10, 3)->nullable();
          $table->decimal('Fe', 10, 3)->nullable();
          $table->decimal('Ag', 10, 3)->nullable();
          $table->decimal('Ai', 10, 3)->nullable();
          $table->decimal('Hg', 10, 3)->nullable();
          $table->decimal('As', 10, 3)->nullable();
          $table->decimal('Se', 10, 3)->nullable();
          $table->decimal('B', 10, 3)->nullable();
          $table->decimal('Sn', 10, 3)->nullable();
          $table->decimal('Coliformes_Fecales_NMP', 10, 3)->nullable();
          $table->decimal('Coliformes_Totales', 10, 3)->nullable();
          $table->decimal('pH', 10, 3)->nullable();
          $table->decimal('SDT', 10, 3)->nullable();
          $table->decimal('SSe', 10, 3)->nullable();
          $table->decimal('conductividad', 10, 3)->nullable();
          $table->decimal('Alcalinidas', 10, 3)->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros');
    }
};
