<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   private static $product;
   public static function createProduct($request)
   {
       self::$product                  = new Product();
       self::$product->category_id     =$request->category_id;
       self::$product->brand_id        =$request->brand_id;
       self::$product->name            =$request->name;
       self::$product->price           =$request->price;
       self::$product->description     =$request->description;
       self::$product->image           =$request->image;
       self::$product->status          =$request->status;
       self::$product->save();
   }
}
