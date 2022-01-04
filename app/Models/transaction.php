<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    //transaction belong to user
    public function belongUser_Transaction(){
        return $this->belongsTo(users::class);
    }

    //one transaction have many transaction detail
    public function transactionDetail(){
        return $this->hasMany(transactionDetail::class);
    }
}
