<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Advert
 *
 * @property int $id
 * @property string $title
 * @property string $engine
 * @property string $torque
 * @property string $make
 * @property string $model
 * @property string $exterior_color
 * @property string $interior_color
 * @property string $gearbox
 * @property string $type_of_drive
 * @property string $mileage
 * @property int $price
 * @property int $year
 * @property int $number_of_seats
 * @property int $doors
 * @property int $weight
 * @property string $description
 * @property string $condition
 * @property string $body_style
 * @property float $contact_number
 * @property string $email
 * @property string $main_image
 * @property string $date
 * @property string $country
 * @property string $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Feature[] $features
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereBodyStyle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereContactNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereEngine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereExteriorColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereGearbox($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereInteriorColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereNumberOfSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereTorque($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereTypeOfDrive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Advert whereYear($value)
 */
	class Advert extends \Eloquent {}
}

namespace App{
/**
 * App\ComparisionList
 *
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ComparisionList whereId($value)
 */
	class ComparisionList extends \Eloquent {}
}

namespace App{
/**
 * App\ComparisionProduct
 *
 * @property int $id
 * @property int $comparision_list_id
 * @property int $product_id
 * @property-read \App\Advert $advert
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ComparisionProduct whereComparisionListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ComparisionProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ComparisionProduct whereProductId($value)
 */
	class ComparisionProduct extends \Eloquent {}
}

namespace App{
/**
 * App\Feature
 *
 * @property int $id
 * @property int $advert_id
 * @property string $feature
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereAdvertId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereFeature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Feature whereId($value)
 */
	class Feature extends \Eloquent {}
}

namespace App{
/**
 * App\Image
 *
 * @property int $id
 * @property int $advert_id
 * @property string $image
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereAdvertId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Image whereImage($value)
 */
	class Image extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

