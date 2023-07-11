<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;

    protected $table = "ukuran";
    protected $fillable = ['kode_ukuran', 'nama_ukuran', 'keterangan'];

    public function masbaja()
    {
        return $this->hasMany(MasBaJa::class);
    }
}
