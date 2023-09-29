<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersetujuanAsesmen extends Model
{
    use HasFactory;

    protected $table = 'persetujuan_asesmens';
    protected $guarded = ['id'];
}
