<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBrand extends Model
{
    use HasFactory;

    protected $table = "subbrand";
    protected $fillable = ['brand_id', 'kode_subbrand', 'nama_subbrand'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function masbaja()
    {
        return $this->hasMany(MasBaJa::class);
    }
}
