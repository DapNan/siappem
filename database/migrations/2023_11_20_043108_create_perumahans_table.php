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
        Schema::create('perumahans', function (Blueprint $table) {
            $table->id('id_perumahan');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_perumahan');
            $table->string('alamat');
            $table->enum('jenis',['subsidi','non_subsidi']);
            $table->integer('tahun_pembangunan');
            $table->string('no_hp_pj');
            $table->enum('status',['proses','diterima','ditolak']);
            $table->string('surat_psu')->nullable();
            $table->string('dokumen_tapak')->nullable();
            $table->string('imb')->nullable();
            $table->string('ijin_lokasi')->nullable();
            $table->string('njop')->nullable();
            $table->string('sertifikat_fasum')->nullable();
            $table->string('surat_pelepasan_tanah')->nullable();
            $table->string('sertifikat_tpu')->nullable();
            $table->string('mou_tpu')->nullable();
            $table->string('mou_tps')->nullable();

            $table->string('dok_diterima')->nullable();
            $table->string('bast')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perumahans');
    }
};
