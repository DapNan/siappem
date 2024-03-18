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
        Schema::create('jenis_psu', function (Blueprint $table) {
            $table->id('id_jenis_psu');
            $table->integer('lahan_makam');
            $table->integer('jalan');
            $table->integer('saluran');
            $table->integer('rth');
            $table->integer('sarana_peribadatan');
            $table->integer('pju');
            $table->integer('tps');
            $table->integer('pos_pengamanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_psus');
    }
};
