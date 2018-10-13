<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComparisionList extends Model
{

    public $timestamps = false;

    /**
     * Two products to one list
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products() {

        return $this->hasMany('App\ComparisionProduct');
    }
}
