<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasKas extends Model
{
    use HasFactory;

    protected $table = "maskas";
    protected $fillable = ['tipe_kas', 'kode_kas', 'nama_kas', 'lokasi', 'norek', 'pemegang', 'link_akun', 'keterangan'];
}
