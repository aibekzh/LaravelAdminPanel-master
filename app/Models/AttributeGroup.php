<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeGroup
 * 
 * @property int $id
 * @property string $title
 *
 * @package App\Models
 */
class AttributeGroup extends Model
{
	protected $table = 'attribute_groups';
	public $timestamps = false;

	protected $fillable = [
		'title'
	];
}
