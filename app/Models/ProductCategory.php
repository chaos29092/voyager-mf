<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProductCategory extends Model
{
    protected $table = 'product_categories';

    public function products()
    {
        return $this->hasMany(Product::class)
            ->where('status', 1)
            ->orderBy('featured', 'DESC')
            ->orderBy('updated_at','DESC');
    }
}
