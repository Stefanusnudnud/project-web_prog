<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionDetail extends Model
{
    use HasFactory;
    //belong to transaction
    public function belongTransaction_Detail(){
        return $this->belongsTo(transction::class);
    }
    //belong to furniture
    public function belongFurniture_Detail(){
        return $this->belongsTo(furniture::class);
    }
}
