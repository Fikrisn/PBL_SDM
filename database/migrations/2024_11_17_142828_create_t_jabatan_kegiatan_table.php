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
        Schema::create('t_jabatan_kegiatan', function (Blueprint $table) {
            $table->id('id_jabatan_kegiatan');
            $table->string('jabatan_nama');
            $table->decimal('poin', 2, 1)->default(0.5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_jabatan_kegiatan');
    }
};