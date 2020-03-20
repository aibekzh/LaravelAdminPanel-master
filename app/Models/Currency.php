<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property float $value
 * @property string $base
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currencies';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float'
	];

	protected $fillable = [
		'title',
		'code',
		'symbol_left',
		'symbol_right',
		'value',
		'base'
	];
}
