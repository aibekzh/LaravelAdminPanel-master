<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 * 
 * @property int $id
 * @property int $product_id
 * @property string $img
 *
 * @package App\Models
 */
class Gallery extends Model
{
	protected $table = 'galleries';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'img'
	];
}
