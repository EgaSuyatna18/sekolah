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
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('mapel1');
            $table->string('mapel2');
            $table->string('mapel3');
            $table->string('mapel4');
            $table->string('mapel5');
            $table->string('mapel6');
            $table->string('mapel7');
            $table->string('mapel8');
            $table->string('mapel9');
            $table->string('mapel10');
            $table->string('mapel11');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
