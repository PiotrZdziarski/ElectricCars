<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Feature
 *
 * @property int $id
 * @property int $advert_id
 * @property string $feature
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereAdvertId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereId($value)
 * @mixin \Eloquent
 */
class Feature extends Model
{
    public $timestamps = false;
}
