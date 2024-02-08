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
        Schema::create('observaciones', function (Blueprint $table) {
            $table->id();
            $table->string('observaciones');
            $table->string('dbq5')->nullable();
            $table->string('dqo')->nullable();
            $table->string('sst')->nullable();
            $table->string( 'st')->nullable();
            $table->string('gya')->nullable();
            $table->string('saam')->nullable();
            $table->string('nok')->nullable();
            $table->string('ntk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observaciones');
    }
};

