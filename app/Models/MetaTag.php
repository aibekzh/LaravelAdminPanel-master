<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaTag
 * 
 * @property int $id
 * @property string $path
 * @property int $metatagable_id
 * @property string $metatagable_type
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $h1
 * @property string $seo_text
 * @property string $canonical
 * @property string $robots
 * @property string $changefreq
 * @property string $priority
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class MetaTag extends Model
{
	protected $table = 'meta_tags';

	protected $casts = [
		'metatagable_id' => 'int'
	];

	protected $fillable = [
		'path',
		'metatagable_id',
		'metatagable_type',
		'title',
		'keywords',
		'description',
		'h1',
		'seo_text',
		'canonical',
		'robots',
		'changefreq',
		'priority'
	];
}
