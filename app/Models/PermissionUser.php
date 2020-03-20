<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PermissionUser
 * 
 * @property int $permission_id
 * @property int $user_id
 * @property string $user_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Permission $permission
 *
 * @package App\Models
 */
class PermissionUser extends Model
{
	protected $table = 'permission_user';
	public $incrementing = false;

	protected $casts = [
		'permission_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'user_id',
		'user_type'
	];

	public function permission()
	{
		return $this->belongsTo(Permission::class);
	}
}
