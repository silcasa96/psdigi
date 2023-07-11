<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisAgen extends Model
{
    use HasFactory;

    protected $table = "jenisagen";
    protected $fillable = ['keagenan_id', 'jenis_agen', 'diskon', 'tgl_input'];

    public function keagenan()
    {
        return $this->belongsTo(Keagenan::class);
    }

    public function mascus()
    {
        return $this->hasMany(MasCus::class);
    }
}
