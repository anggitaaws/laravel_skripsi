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
        Schema::create('berita_acara_pengoperasian_jtm', function (Blueprint $table) {
            $table->id();
            $table->string('id_jtm')->nullable();
            $table->string('nomor_berita_acara');
            $table->date('tanggal');
            $table->string('ulp');
            $table->string('no_spbj');
            $table->string('vendor')->nullable();
            $table->string('location');
            $table->string('initial_coordinates')->nullable();
            $table->string('final_coordinates')->nullable();
            $table->string('penyulang');
            $table->string('keypoint');
            $table->string('section');
            $table->string('segment');
            $table->string('id_cabletype');
            $table->string('phase');
            $table->string('spec_cablesize');
            $table->string('cable_length');
            $table->string('spec_pole');
            $table->string('spec_consule');
            $table->string('height_pole');
            $table->string('spec_circuit');
            $table->string('segment1');
            $table->string('segment2');
            $table->string('environment');
            $table->string('insulation_r_body')->nullable();
            $table->string('insulation_s_body')->nullable();
            $table->string('insulation_t_body')->nullable();
            $table->string('manager_ulp')->nullable();
            $table->string('pelaksana')->nullable();
            $table->string('pengawas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_acara_pengoperasian_jtm');
    }
};
