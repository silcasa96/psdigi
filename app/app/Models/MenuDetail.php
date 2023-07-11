<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDetail extends Model
{
    use HasFactory;

    protected $table = "m_menu_detail";
    protected $guarded = ['m_menu_detail_id'];

    public function menugrup()
    {
        return $this->belongsTo(MenuGrup::class);
    }
}
