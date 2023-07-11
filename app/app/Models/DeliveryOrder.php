<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;
    protected $table = "delivery_order";
    protected $guarded = ["id"];
    
    public function fakturjual()
    {
        return $this->hasOne(FakturJual::class);
    }
}
