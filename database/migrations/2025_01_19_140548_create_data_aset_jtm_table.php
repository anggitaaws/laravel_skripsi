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
        Schema::create('data_aset_jtm', function (Blueprint $table) {
            $table->id();
            $table->string('ulp');
            $table->string('id_cabletype');
            $table->string('location');
            $table->string('penyulang');
            $table->string('section');
            $table->string('segment');
            $table->integer('phase');
            $table->integer('cable_length');
            $table->integer('spec_cablesize');
            $table->string('spec_pole');
            $table->string('spec_consule');
            $table->integer('height_pole');
            $table->string('spec_circuit');
            $table->string('segment1');
            $table->string('segment2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aset_jtm');
    }
};
