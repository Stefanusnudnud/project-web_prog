<?php

namespace App\Models;

use FurnitureType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class furniture extends Model
{
    use HasFactory;
    //one funiture can be in many transaction detail
    public function transactionDetails(){
        return $this->hasMany(transactionDetail::class);
    }
    //one furniture can be in many carts
    public function carts(){
        return $this->hasMany(cart::class);
    }

    public function type(){
        return $this->hasOne(FurnitureType::class);
    }
}
