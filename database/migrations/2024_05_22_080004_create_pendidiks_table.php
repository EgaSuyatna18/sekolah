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
        Schema::create('pendidiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nuptk');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tanggal_lahir');
            $table->string('nip');
            $table->enum('status_pegawai', ['honorer', 'pns']);
            $table->enum('ptk', ['PTK Diasnogtik', 'PTK Partisipan', 'PTK Empiris', 'PTK Eksperimental']);
            $table->enum('sertifikasi', ['Sertifikasi Pendidik', 'Sertifikasi Kompetensi Guru', 'Sertifikasi Guru Profesional', 'Sertifikasi Internasional']);
            $table->date('tmt');
            $table->string('mata_pelajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidiks');
    }
};
