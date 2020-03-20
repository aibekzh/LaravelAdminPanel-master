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
 * Class Product
 * 
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property string $title
 * @property string $alias
 * @property string $content
 * @property float $price
 * @property float $old_price
 * @property string $status
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property string $hit
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Collection|Category[] $categories
 * @property Collection|ProductImage[] $product_images
 *
 * @package App\Models
 */
class Product extends Model
{
	use SoftDeletes;
	protected $table = 'products';

	protected $casts = [
		'category_id' => 'int',
		'brand_id' => 'int',
		'price' => 'float',
		'old_price' => 'float'
	];

	protected $fillable = [
		'category_id',
		'brand_id',
		'title',
		'alias',
		'content',
		'price',
		'old_price',
		'status',
		'keywords',
		'description',
		'img',
		'hit'
	];

	public function categories()
	{
		return $this->belongsToMany(Category::class)
					->withPivot('id')
					->withTimestamps();
	}

	public function product_images()
	{
		return $this->hasMany(ProductImage::class);
	}
}
