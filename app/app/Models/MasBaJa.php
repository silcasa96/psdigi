<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasBaJa extends Model
{
    use HasFactory;

    protected $table = "masbaja";
    protected $fillable = ['gambar', 'barcode', 'nama', 'artikel', 'brand_id', 'subbrand_id', 'warna_id', 'ukuran_id', 'hargajual', 'produk', 'tglrelease', 'berat', 'keterangan'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subbrand()
    {
        return $this->belongsTo(SubBrand::class);
    }

    public function warna()
    {
        return $this->belongsTo(Warna::class);
    }

    public function ukuran()
    {
        return $this->belongsTo(Ukuran::class);
    }
}
