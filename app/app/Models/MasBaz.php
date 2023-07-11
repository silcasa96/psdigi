<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasBaz extends Model
{
    use HasFactory;

    protected $table = "masbaz";
    protected $fillable = ['periode_awal', 'periode_akhir', 'kode', 'nama', 'lokasi', 'penanggungjawab', 'keterangan'];
}
