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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->string('username'); 
            $table->string('email')->unique(); // Kolom email (unik)
            $table->string('password'); // Kolom password
            $table->string('no_hp', 15); 
            // $table->text('alamat'); 
            $table->json('alamat');
            $table->integer('usia');
            $table->string('foto_profil')->nullable(); 
            $table->string('remember_token')->nullable(); // Kolom remember_token
            $table->string('versi'); 
            $table->timestamp('created_at')->nullable(); // Tanggal pembuatan
            $table->timestamp('updated_at')->nullable(); // Tanggal pembaruan
            $table->integer('status_daftar')->default(0);
            $table->string('device_name')->nullable();
            $table->string('os_version')->nullable(); 
        });
        Schema::table('registrasi', function (Blueprint $table) {
            $table->dropColumn('remember_token');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi');
        Schema::table('registrasi', function (Blueprint $table) {
            $table->dropColumn('foto_profil');
            $table->string('remember_token', 100)->nullable();
            $table->dropColumn('device_name');
            $table->dropColumn('os_version');
        });
    }
};
