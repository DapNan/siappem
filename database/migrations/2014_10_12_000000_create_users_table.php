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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('type')->default(false); //add type boolean Users: 0=>User, 1=>Admin, 2=>Manager 

            $table->string('nama_badan_usaha', 100);
            $table->string('nama_pemilik', 100);
            $table->string('nik_pemilik');
            $table->string('no_hp_pemilik');
            $table->string('alamat_perusahaan', 200);
            $table->string('nib');
//file
            $table->string('akta_pendiri');
            $table->string('npwp_perusahaan');
            $table->string('ktp_pendiri');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
