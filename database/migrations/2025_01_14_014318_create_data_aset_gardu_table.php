<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

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
            $table->string('ulp')->nullable(); // ulp
            $table->string('id_transpower'); // Daya/Phasa/KVA Internal
            $table->string('phase'); // Phasa
            $table->string('location')->nullable(); // Lokasi
            $table->string('penyulang'); // penyulang
            $table->string('keypoint'); // keypoint
            $table->string('section'); // section
            $table->string('segment'); // segment
            $table->decimal('latitude',30,20); // latitude/koordinat
            $table->decimal('longitude',30,20); // longitude/koordinat
            $table->string('spec_fabrication')->nullable(); // Merk / Type
            $table->string('spec_transtap')->nullable(); // Posisi TAP
            $table->string('spec_voltage')->nullable(); // Teg. Pengenal (V)
            $table->string('spec_current')->nullable(); // Arus Pengenal (A)
            $table->string('spec_year')->nullable(); // THN. Buat
            $table->string('spec_wiring')->nullable(); // Vektor Group
            $table->string('spec_cooling_type')->nullable(); // sistem pendingin
            $table->string('spec_oilweight')->nullable(); // Berat / Vol. minyak
            $table->string('spec_transweight')->nullable(); // Berat Total 
            $table->string('vendor')->nullable(); //vendor
            $table->string('construction')->nullable(); // konstruksi
            $table->string('serial_number')->nullable(); // No.Seri
            $table->string('impedance')->nullable(); //Impedansi
            $table->string('standar')->nullable(); //standar
            $table->string('bahan_belitan')->nullable(); //bahan belitan
            $table->string('spec_transtap1')->nullable(); //Sadapan
            $table->string('temperature')->nullable(); //Kenaikan Suhu
            $table->string('trafo_load')->nullable(); //Beban Trafo
            $table->string('information')->nullable(); // Keterangan
            $table->string('insulation_r_body')->nullable(); // R-body
            $table->string('insulation_s_body')->nullable(); // S-body
            $table->string('insulation_t_body')->nullable(); // T-body
            $table->string('earthneutral')->nullable(); // Tahanan Pentanahan Netral Trafo dan Ujung JTR
            $table->string('earthla')->nullable(); // Tahanan Pentanahan Lightning Arrester 
            $table->string('earthbody')->nullable(); // Tahanan Pentanahan Body Trafo
            $table->string('insulation_R_r')->nullable(); // R-r
            $table->string('insulation_S_s')->nullable(); // S-s
            $table->string('insulation_T_t')->nullable(); //T-t
            $table->string('asset')->nullable();
            $table->string('jenis_gd_internal')->nullable();
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
