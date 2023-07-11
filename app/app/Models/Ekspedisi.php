<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    use HasFactory;

    protected $table = "ekspedisi";
    protected $fillable = ['kode_ekspedisi', 'nama_ekspedisi', 'keterangan'];

    public function mascus()
    {
        return $this->hasMany(MasCus::class);
    }
    
    public function fakturjual()
    {
        return $this->hasOne(FakturJual::class);
    }
}
