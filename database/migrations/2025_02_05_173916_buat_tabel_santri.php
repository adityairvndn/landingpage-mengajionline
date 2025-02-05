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
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->integer('usia');
            $table->integer('no_telp');
            $table->string('negara');
            $table->string('alamat');
            $table->integer('nilai');
            $table->string('komentar');
            // $table->string('versi');
            // $table->date('creat_at');
            // $table->date('update_at');
            // $table->string('status_daftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};
