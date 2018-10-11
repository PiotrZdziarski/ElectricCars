<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Advert extends Model
{
    public $timestamps = false;


    /**
     * Return all features
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function features()
    {
        return $this->hasMany('App\Feature');
    }
}
