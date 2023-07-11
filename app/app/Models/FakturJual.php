<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FakturJual extends Model
{
    use HasFactory;

    protected $table = "fakturjual";
    protected $guarded = ["id"];
    
    public function do()
    {
        return $this->hasOne(DeliveryOrder::class);
    }
    
    public function ekspedisi()
    {
        return $this->hasOne(Ekspedisi::class);
    }
    
    public function customer()
    {
        return $this->hasOne(MasCus::class);
    }
    
   
}
