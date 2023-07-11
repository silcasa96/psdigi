<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasCus extends Model
{
    use HasFactory;

    protected $table = "mascus";
    protected $guarded = ['id'];

    public function keagenan()
    {
        return $this->belongsTo(Keagenan::class);
    }

    public function jenisagen()
    {
        return $this->belongsTo(JenisAgen::class);
    }

    public function tipeanggota()
    {
        return $this->belongsTo(TipeAnggota::class);
    }

    public function tipebayar()
    {
        return $this->belongsTo(TipeBayar::class);
    }

    public function province()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function city()
    {
        return $this->belongsTo(Kota::class);
    }

    public function district()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function ekspedisi()
    {
        return $this->belongsTo(Ekspedisi::class);
    }
}
