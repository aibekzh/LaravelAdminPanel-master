<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoryProduct
 * 
 * @property int $id
 * @property int $category_id
 * @property int $product_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Category $category
 * @property Product $product
 *
 * @package App\Models
 */
class CategoryProduct extends Model
{
	protected $table = 'category_product';

	protected $casts = [
		'category_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'product_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
