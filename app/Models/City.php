<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property string $name
 * @property string $state_code
 * @property int $province_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Province $province
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'cities';
	public $incrementing = false;

	protected $casts = [
		'province_id' => 'int'
	];

	protected $fillable = [
		'name',
		'state_code',
		'province_id'
	];

	public function province()
	{
		return $this->belongsTo(Province::class);
	}
}
