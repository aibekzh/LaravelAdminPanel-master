<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property int $parent_id
 * @property string $keywords
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Category extends Model
{
	use SoftDeletes;
	protected $table = 'categories';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'title',
		'alias',
		'parent_id',
		'keywords',
		'description'
	];

	public function products()
	{
		return $this->belongsToMany(Product::class)
					->withPivot('id')
					->withTimestamps();
	}
}
