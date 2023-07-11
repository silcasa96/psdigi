<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSub extends Model
{
    use HasFactory;

    protected $table = "m_menu_sub";
    protected $guarded = ['m_menu_sub_id'];
    
    public function menugrup()
    {
        return $this->belongsTo(MenuGrup::class);
    }
}
