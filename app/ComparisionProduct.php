<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComparisionProduct
 */
class ComparisionProduct extends Model
{
    public $timestamps = false;

    /**
     * Advert related to comparision list product
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function advert() {
        return $this->hasOne('App\Advert', 'id', 'product_id')
            ->select('id', 'title', 'main_image');
    }
}
