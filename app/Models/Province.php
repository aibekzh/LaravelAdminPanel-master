<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 * 
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Country $country
 * @property City $city
 *
 * @package App\Models
 */
class Province extends Model
{
	protected $table = 'provinces';

	protected $casts = [
		'country_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'country_id',
		'status'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	public function city()
	{
		return $this->hasOne(City::class);
	}
}
