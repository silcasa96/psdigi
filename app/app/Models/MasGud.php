<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasGud extends Model
{
    use HasFactory;

    protected $table = "masgud";
    protected $guarded = ['id'];
    
    public function cabangstore()
    {
        return $this->hasOne(CabangStore::class);
    }
}
