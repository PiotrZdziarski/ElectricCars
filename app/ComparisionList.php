<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComparisionList extends Model
{

    public $timestamps = false;

    /**
     * Multiple products to one list
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comparision_products()
    {
        return $this->hasMany('App\ComparisionProduct')
            ->select('id', 'product_id');
    }
}
