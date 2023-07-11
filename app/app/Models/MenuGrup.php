<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuGrup extends Model
{
    use HasFactory;

    protected $table = "m_menu_group";
    protected $guarded = ['m_menu_group_id'];

    public function menusub()
    {
        return $this->hasMany(MenuSub::class);
    }
}
