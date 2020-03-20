<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * 
 * @property int $id
 * @property int $customer_id
 * @property string $name
 * @property string $stripe_id
 * @property string $stripe_plan
 * @property int $quantity
 * @property Carbon $trial_ends_at
 * @property Carbon $ends_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Subscription extends Model
{
	protected $table = 'subscriptions';

	protected $casts = [
		'customer_id' => 'int',
		'quantity' => 'int'
	];

	protected $dates = [
		'trial_ends_at',
		'ends_at'
	];

	protected $fillable = [
		'customer_id',
		'name',
		'stripe_id',
		'stripe_plan',
		'quantity',
		'trial_ends_at',
		'ends_at'
	];
}
