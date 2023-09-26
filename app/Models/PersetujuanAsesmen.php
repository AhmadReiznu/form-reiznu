<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanAsesmen extends Model
{
    protected $table = 'persetujuan_asesmens';
    protected $fillable = [
        'skema', 'judul', 'nomor', 'tuk', 'nama_asesor',
        'nama_asesi', 'bukti', 'jenis_bukti', 'tgl_asesmen',
        'waktu_asesmen', 'tuk_asesmen', 'asesi_1', 'asesor',
        'asesi_2', 'ttd_asesor', 'ttd_asesi'];

    use HasFactory;
}
