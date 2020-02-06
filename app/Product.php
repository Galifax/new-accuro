<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;
use Voyager;

class Product extends Model
{
    public function properties()
    {
        return $this->belongsToMany(PropertyStaticValue::class);
    }
    
    public function getNewProducts()
    {
        return self::orderBy('id', 'desc')
            ->limit(6)
            ->get();
    }

    public function getProducts()
    {
        return self::orderBy('id', 'desc')
            ->paginate(27);
    }

    public function getProductBySlug($slug)
    {
        return self::where('slug', $slug)
            ->firstOrFail();
    }

    public function getPhoto()
    {
        return Voyager::image($this->photo);
    }

    public function getGallery()
    {
        $gallery = json_decode($this->gallery, true);
        if (isset($gallery) && !empty($gallery)) {
            foreach($gallery as $k => $item) {
                $gallery[$k] = Voyager::image($item);
            }
        }
        array_unshift($gallery, $this->getPhoto());

//        ddd($gallery);
        return $gallery;
    }

    public function getTechnicalDrawing()
    {
        return Voyager::image($this->technical_drawing);
    }

    static function topProducts()
    {
        return self::where('mark_hit', 1)
            ->get();
    }
}
