<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * 
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property string $img
 * @property string $description
 *
 * @package App\Models
 */
class Brand extends Model
{
	protected $table = 'brands';
	public $timestamps = false;

	protected $fillable = [
		'title',
		'alias',
		'img',
		'description'
	];
}
