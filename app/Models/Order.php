<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_id
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * @property string $currency
 * @property string $note
 * @property float $sum
 * 
 * @property Collection|OrderProduct[] $order_products
 *
 * @package App\Models
 */
class Order extends Model
{
	use SoftDeletes;
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'sum' => 'float'
	];

	protected $fillable = [
		'user_id',
		'status',
		'currency',
		'note',
		'sum'
	];

	public function order_products()
	{
		return $this->hasMany(OrderProduct::class);
	}
}
