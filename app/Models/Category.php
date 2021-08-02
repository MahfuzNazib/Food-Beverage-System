<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'position', 'is_active', 'offer_amount', 'offer_status'];
    
    // Store New Brand
    public static function storeNewCategory($requestData){
        try{
            $id = static::create($requestData);
            return $id;
        }catch(\Exception $e){   
            throw new \Exception($e->getMessage(), 1);               
        }
    }

    // Update Brand
    public static function updateCategory($requestData, $id){
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
