<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $alias
 * @property string $address1
 * @property string $address2
 * @property string $zip
 * @property string $state_code
 * @property string $city
 * @property string $status
 * @property string $phone
 * @property int $user_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'alias',
		'address1',
		'address2',
		'zip',
		'state_code',
		'city',
		'status',
		'phone',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
