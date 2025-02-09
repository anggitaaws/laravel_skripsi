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
        Schema::create('berita_acara_update_jtr', function (Blueprint $table) {
            $table->id();
            $table->string('id_jtr')->nullable();
            $table->string('nomor_berita_acara')->nullable();
            $table->date('tanggal');
            $table->string('ulp');
            $table->string('no_spbj')->nullable();
            $table->string('vendor')->nullable();
            $table->string('location');
            $table->string('initial_coordinates')->nullable();
            $table->string('final_coordinates')->nullable();
            $table->string('penyulang');
            $table->string('keypoint');
            $table->string('section');
            $table->string('segment');
            $table->string('nama_gardu');
            $table->string('id_cabletype');
            $table->string('phase');
            $table->string('spec_cablesize');
            $table->string('cable_length');
            $table->string('spec_pole');
            $table->string('jtr_type');
            $table->string('sumofpole');
            $table->string('jurusan_gardu');
            $table->string('insulation_r_body')->nullable();
            $table->string('insulation_s_body')->nullable();
            $table->string('insulation_t_body')->nullable();
            $table->string('earthneutral')->nullable();
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
        Schema::dropIfExists('berita_acara_update_jtr');
    }
};
