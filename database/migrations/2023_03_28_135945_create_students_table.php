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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('group_id')->unsigned();
            $table->bigInteger('entry_year_id')->unsigned();
            $table->string('nisn')->nullable();
            $table->string('nis');
            $table->string('nik')->nullable();
            $table->string('no_akta')->nullable();
            $table->string('nama_siswa');
            $table->string('panggilan')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->boolean('tpa')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('alamat')->nullable();
            $table->string('alamat_domisili')->nullable();
            $table->string('no_telepon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
