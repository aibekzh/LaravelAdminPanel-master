<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductImage
 * 
 * @property int $id
 * @property int $product_id
 * @property string $src
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Product $product
 *
 * @package App\Models
 */
class ProductImage extends Model
{
	protected $table = 'product_images';

	protected $casts = [
		'product_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'src'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
