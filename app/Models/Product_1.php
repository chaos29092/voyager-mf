<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function productCategoryId(){
        return $this->belongsTo(ProductCategory::class);
    }

//    public function product_category()
//    {
//        return $this->hasOne(ProductCategory::class, 'id', 'product_category_id');
//    }
}
