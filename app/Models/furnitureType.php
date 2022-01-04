<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class furnitureType extends Model
{
    use HasFactory;
    public function belongFurniture_Type(){
        return $this->belongsTo(furniture::class);
    }
}
