<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'slug', 'position', 'is_active'];

    // Store New Brand
    public static function storeNewBrand($requestData){
        try{
            $id = static::create($requestData);
            return $id;
        }catch(\Exception $e){   
            throw new \Exception($e->getMessage(), 1);               
        }
    }

    // Update Brand
    public static function updateBrand($requestData, $id){
        try{
            $brand = static::find($id);
            $brand->fill($requestData)->save();
            return $id;
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage(), 1);  
        }
    }
}
