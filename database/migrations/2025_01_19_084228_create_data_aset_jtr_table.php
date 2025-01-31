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
        Schema::create('data_aset_jtr', function (Blueprint $table) {
            $table->id();
            $table->string('id_jtr')->nullable();
            $table->string('nomor_berita_acara')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('ulp');
            $table->string('no_spbj')->nullable();
            $table->string('vendor')->nullable();
            $table->string('location');
            $table->string('initial_coordinates')->nullable();
            $table->string('final_coordinates')->nullable();
            $table->string('penyulang')->nullable();
            $table->string('keypoint')->nullable();
            $table->string('section')->nullable();
            $table->string('segment');
            $table->string('nama_gardu')->nullable();
            $table->string('id_cabletype');
            $table->string('phase')->nullable();
            $table->string('spec_cablesize');
            $table->string('cable_length');
            $table->string('spec_pole')->nullable();
            $table->string('jtr_type')->nullable();
            $table->string('sumofpole');
            $table->string('jurusan_gardu')->nullable();
            $table->string('insulation_r_body')->nullable();
            $table->string('insulation_s_body')->nullable();
            $table->string('insulation_t_body')->nullable();
            $table->string('earthenutral')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aset_jtr');
    }
};
