<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keagenan extends Model
{
    use HasFactory;

    protected $table = "keagenan";
    protected $fillable = ['kode_keagenan', 'nama_keagenan'];

    public function jenisagen()
    {
        return $this->hasMany(JenisAgen::class);
    }

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }

    public function mascus()
    {
        return $this->hasMany(MasCus::class);
    }
}
