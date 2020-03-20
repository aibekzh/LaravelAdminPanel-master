<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 * 
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $qty
 * @property string $title
 * @property float $price
 * 
 * @property Order $order
 *
 * @package App\Models
 */
class OrderProduct extends Model
{
	protected $table = 'order_products';
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'qty' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'qty',
		'title',
		'price'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
