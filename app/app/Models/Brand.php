<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = "brand";
    protected $fillable = ['kode_brand', 'nama_brand', 'keagenan_id', 'tipe'];

    public function keagenan()
    {
        return $this->belongsTo(Keagenan::class);
    }

    public function subbrand()
    {
        return $this->hasMany(SubBrand::class);
    }

    public function masbaja()
    {
        return $this->hasMany(MasBaJa::class);
    }
}
