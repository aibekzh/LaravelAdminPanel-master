<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStatus
 * 
 * @property int $id
 * @property string $name
 * @property string $color
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class OrderStatus extends Model
{
	protected $table = 'order_statuses';

	protected $fillable = [
		'name',
		'color'
	];
}
