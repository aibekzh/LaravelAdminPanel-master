<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeValue
 * 
 * @property int $id
 * @property string $value
 * @property int $attr_group_id
 *
 * @package App\Models
 */
class AttributeValue extends Model
{
	protected $table = 'attribute_values';
	public $timestamps = false;

	protected $casts = [
		'attr_group_id' => 'int'
	];

	protected $fillable = [
		'value',
		'attr_group_id'
	];
}
