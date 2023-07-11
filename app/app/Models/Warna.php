<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;

    protected $table = "warna";
    protected $fillable = ['kode_warna', 'nama_warna'];

    public function masbaja()
    {
        return $this->hasMany(MasBaJa::class);
    }
}
