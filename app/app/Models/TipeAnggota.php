<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeAnggota extends Model
{
    use HasFactory;

    protected $table = "tipeanggota";
    protected $fillable = ['kode_tipe', 'nama_tipe'];

    public function mascus()
    {
        return $this->hasMany(MasCus::class);
    }
}
