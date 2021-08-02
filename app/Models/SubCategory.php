<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'slug', 'is_active'];

    // Store New sub_category
    public static function storeNewSubCategory($requestData){
        try{
            $id = static::create($requestData);
            return $id;
        }catch(\Exception $e){   
            throw new \Exception($e->getMessage(), 1);               
        }
    }

    // Update sub_category
    public static function updateSubCategory($requestData, $id){
        try{
            $sub_category = static::find($id);
            $sub_category->fill($requestData)->save();
            return $id;
        }
        catch(\Exception $e){
            throw new \Exception($e->getMessage(), 1);  
        }
    }
}
