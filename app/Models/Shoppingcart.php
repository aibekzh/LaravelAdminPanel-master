<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shoppingcart
 * 
 * @property string $identifier
 * @property string $instance
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Shoppingcart extends Model
{
	protected $table = 'shoppingcart';
	public $incrementing = false;

	protected $fillable = [
		'content'
	];
}
