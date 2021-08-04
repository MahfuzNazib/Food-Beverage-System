<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'brand_id',
        'name',
        'thumbnail',
        'qnty',
        'slug',
        'price',
        'offer_price',
        'short_description',
        'description',
        'specification',
        'is_featured',
        'offer_status',
        'offer_id',
        'is_active',
    ];

    public static function storeNewProduct($requestData){
        try{
            $id = static::create($requestData);
            return $id;
        }catch(\Exception $e){   
            throw new \Exception($e->getMessage(), 1);               
        }
    }
}
