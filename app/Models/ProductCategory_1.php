<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use TCG\Voyager\Traits\Translatable;


class ProductCategory extends Model
{
//    use Translatable;
//
//    protected $translatable = ['name'];

    protected $table = 'product_categories';

    protected $fillable = ['slug', 'name'];

    public function products()
    {
        return $this->hasMany(Product::class)
            ->where('status', 1)
            ->orderBy('sort', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}
