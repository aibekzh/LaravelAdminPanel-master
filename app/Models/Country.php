<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * @property string $name
 * @property string $iso
 * @property string $iso3
 * @property int $numcode
 * @property int $phonecode
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Province[] $provinces
 * @property State $state
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';

	protected $casts = [
		'numcode' => 'int',
		'phonecode' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'iso',
		'iso3',
		'numcode',
		'phonecode',
		'status'
	];

	public function provinces()
	{
		return $this->hasMany(Province::class);
	}

	public function state()
	{
		return $this->hasOne(State::class);
	}
}
