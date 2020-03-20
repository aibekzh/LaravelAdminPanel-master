<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RelatedProduct
 * 
 * @property int $product_id
 * @property int $related_id
 *
 * @package App\Models
 */
class RelatedProduct extends Model
{
	protected $table = 'related_products';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'related_id' => 'int'
	];
}
