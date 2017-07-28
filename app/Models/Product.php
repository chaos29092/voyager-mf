<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function productCategoryId(){
        return $this->belongsTo(ProductCategory::class);
    }
}
