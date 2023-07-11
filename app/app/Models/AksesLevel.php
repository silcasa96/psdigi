<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AksesLevel extends Model
{
    use HasFactory;

    protected $table = "akseslevel";
    protected $guarded = ['id'];

    public function masuser()
    {
        return $this->hasMany(User::class);
    }
    
}
