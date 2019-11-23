<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Product extends Model
{
    public function getNewProducts()
    {
        return self::orderBy('id', 'desc')
            ->limit(6)
            ->get();
    }

    public function getProducts()
    {
        return self::orderBy('id', 'desc')
            ->paginate(36);
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
        $gallery = json_decode($this->gallery);
        if (isset($gallery) && !empty($gallery)) {
            foreach($gallery as $k => $item) {
                $gallery[$k] = Voyager::image($item);
            }
        }
        return $gallery;
    }

    public function getTechnicalDrawing()
    {
        return Voyager::image($this->technical_drawing);
    }
}
