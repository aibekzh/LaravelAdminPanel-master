<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeProduct
 * 
 * @property int $attr_id
 * @property int $product_id
 *
 * @package App\Models
 */
class AttributeProduct extends Model
{
	protected $table = 'attribute_products';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'attr_id' => 'int',
		'product_id' => 'int'
	];
}
