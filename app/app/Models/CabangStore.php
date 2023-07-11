<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabangStore extends Model
{
    use HasFactory;

    protected $table = "mascastore";
    protected $guarded = ['id'];

    public function masuser()
    {
        return $this->hasMany(User::class);
    }
    
    public function mastore()
    {
        return $this->belongsTo(Store::class);
    }
    
    public function masgud()
    {
        return $this->hasOne(MasGud::class);
    }
}
