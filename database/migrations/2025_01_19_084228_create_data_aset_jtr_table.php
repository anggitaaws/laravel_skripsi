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
            $table->string('ulp');
            $table->string('id_CableType');
            $table->string('location')->nullable();
            $table->string('segment')->nullable();
            $table->string('spec_fabrication')->nullable();
            $table->decimal('cable_length');
            $table->string('spec_CableSize');
            $table->integer('NumberofPole');
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
