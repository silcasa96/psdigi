<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = "kelurahan";
    protected $fillable = ['kode_kelurahan', 'nama_kelurahan'];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }

    public function mascus()
    {
        return $this->hasMany(MasCus::class);
    }
}
