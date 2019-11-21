<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('\App\Product', 'category_id','id');
    }

    public function getCategoriesWithProducts()
    {
        return self::with('products')
            ->orderBy('name', 'asc')
            ->get();
    }
}
