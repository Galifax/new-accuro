<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [];

    public $timestamps = false;

    public function psv()
    {
        return $this->hasMany('\App\PropertyStaticValue', 'property_id', 'id');
    }

    public static function getProperties($id)
    {
        return self::with(['psv.products' => function($q) use($id){
                $q->where('products.id', $id);
            }])
            ->get();
    }

    public static function getPropPsv($id)
    {
        $property = self::whereHas('psv', $psv = function($q) use($id) {
               $q->whereHas('products', function($q) use($id) {
                   $q->where('products.id', $id);
               });
            })
            ->with(['psv' => $psv])
            ->get();
        return $property;
    }
}
