<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class cart extends Model
{
    use HasFactory;
    public function belongUser_Cart(){
        return $this->belongsTo(users::class);
    }

    public function belongfurniture_Cart(){
        return $this->belongsTo(furniture::class);
    }
}
