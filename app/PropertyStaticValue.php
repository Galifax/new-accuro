<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyStaticValue extends Model
{
    protected $fillable = [];

    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public static function getCheckProduct($id, $productId)
    {
        $psv = self::where('property_static_values.id', $id)
            ->with(['products' => function($q) use($productId){
                $q->where('products.id', $productId);
            }])
            ->one();
        return $psv;
    }

}
