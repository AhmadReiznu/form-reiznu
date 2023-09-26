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
        Schema::create('persetujuan_asesmens', function (Blueprint $table) {
            $table->id();
            $table->string('skema');
            $table->string('judul');
            $table->string('nomor');
            $table->string('tuk');
            $table->string('nama_asesor');
            $table->string('nama_asesi');
            $table->string('bukti');
            $table->string('jenis_bukti');
            $table->date('tgl_asesmen');
            $table->time('waktu_asesmen');
            $table->string('tuk_asesmen');
            $table->string('asesi_1');
            $table->string('asesor');
            $table->string('asesi_2');
            $table->string('ttd_asesor');
            $table->string('ttd_asesi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persetujuan_asesmens');
    }
};
