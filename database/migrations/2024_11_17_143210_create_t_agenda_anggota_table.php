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
        Schema::create('t_agenda_anggota', function (Blueprint $table) {
            $table->id('id_agenda_anggota');
            $table->unsignedBigInteger('id_agenda')->nullable();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->string('nama_agenda');

            $table->foreign('id_agenda', 'fk_agenda')->references('id_agenda')->on('t_agenda');
            $table->foreign('id_anggota', 'fk_anggota')->references('id_anggota')->on('t_anggota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_agenda_anggota');
    }
};