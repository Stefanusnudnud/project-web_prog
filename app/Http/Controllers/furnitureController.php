<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\furniture;
use App\Models\furnitureType;

class furnitureController extends Controller
{
    //
    public function furniture($id){
        $furniture = furniture::join('furnitureType','furnitureType.id','=','furniture.type_id')
        ->where('furniture.id','=',$id)->get([
            'furniture.name','furniture.price','furnitureType.type_name','furniture.color','furniture.file_name'
        ]);
    }
    public function create(Request $request){
        $furniture = new furniture();

        $furniture->name = $request->name;
        $furniture->price = $request->price;
        $furniture->type = $request->type;
        $furniture->color = $request->color;

        $furniture->save();
    }
}
