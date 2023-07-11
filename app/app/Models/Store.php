<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = "mastore";
    protected $guarded = ['id'];

    public function masuser()
    {
        return $this->hasMany(User::class);
    }
    
    public function mascabang()
    {
        return $this->hasMany(CabangStore::class);
    }
}
