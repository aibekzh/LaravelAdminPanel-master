<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Courier
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $url
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Courier extends Model
{
	protected $table = 'couriers';

	protected $fillable = [
		'name',
		'description',
		'url'
	];
}
