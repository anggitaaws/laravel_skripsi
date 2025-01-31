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
        Schema::create('data_aset_gardu', function (Blueprint $table) {
            $table->id();
            $table->string('id_gardu')->nullable(); // id_gardu
            $table->string('nomor_berita_acara')->nullable(); // nomor berita acara
            $table->date('tanggal')->nullable();
            $table->string('name'); //nama gardu
            $table->string('no_spbj')->nullable(); // No.SPBJ Pelaksana
            $table->string('ulp'); // ulp
            $table->integer('id_transpower'); // Daya/Phasa/KVA Internal
            $table->integer('phase'); // Phasa
            $table->string('location'); // Lokasi
            $table->string('penyulang'); // penyulang
            $table->string('keypoint'); // keypoint
            $table->string('section'); // section
            $table->string('segment'); // segment
            $table->decimal('latitude',10,8); // latitude/koordinat
            $table->decimal('longitude',11,8); // longitude/koordinat
            $table->string('spec_fabrication'); // Merk / Type
            $table->string('spec_transtap')->nullable(); // Posisi TAP
            $table->string('spec_voltage')->nullable(); // Teg. Pengenal (V)
            $table->string('spec_current')->nullable(); // Arus Pengenal (A)
            $table->integer('spec_year')->nullable(); // THN. Buat
            $table->string('spec_wiring')->nullable(); // Vektor Group
            $table->string('spec_cooling_type')->nullable(); // sistem pendingin
            $table->integer('spec_oilweight')->nullable(); // Berat / Vol. minyak
            $table->integer('spec_transweight')->nullable(); // Berat Total 
            $table->string('vendor')->nullable(); //vendor
            $table->string('construction')->nullable(); // konstruksi
            $table->string('serial_number')->nullable(); // No.Seri
            $table->integer('impedance')->nullable(); //Impedansi
            $table->string('standar')->nullable(); //standar
            $table->string('bahan_belitan')->nullable(); //bahan belitan
            $table->integer('spec_transtap1')->nullable(); //Sadapan
            $table->string('temperature')->nullable(); //Kenaikan Suhu
            $table->integer('trafo_load')->nullable(); //Beban Trafo
            $table->string('information')->nullable(); // Keterangan
            $table->decimal('insulation_r_body')->nullable(); // R-body
            $table->decimal('insulation_s_body')->nullable(); // S-body
            $table->decimal('insulation_t_body')->nullable(); // T-body
            $table->decimal('earthneutral')->nullable(); // Tahanan Pentanahan Netral Trafo dan Ujung JTR
            $table->decimal('earthla')->nullable(); // Tahanan Pentanahan Lightning Arrester 
            $table->decimal('earthbody')->nullable(); // Tahanan Pentanahan Body Trafo
            $table->decimal('insulation_R_r')->nullable(); // R-r
            $table->decimal('insulation_S_s')->nullable(); // S-s
            $table->decimal('insulation_T_t')->nullable(); //T-t
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_aset_gardu');
    }
};
