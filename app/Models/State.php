<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property string $state
 * @property string $state_code
 * @property int $country_id
 * 
 * @property Country $country
 *
 * @package App\Models
 */
class State extends Model
{
	protected $table = 'states';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'state',
		'state_code',
		'country_id'
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
