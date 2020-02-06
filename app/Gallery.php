<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
    public $timestamps = false;

    public function getImage()
    {
        return \Voyager::image($this->src);
    }

    static function main()
    {
        return self::orderBy('id', 'desc')
            ->limit(8)
            ->get();
    }
}
