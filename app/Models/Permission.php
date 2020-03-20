<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Role[] $roles
 * @property PermissionUser $permission_user
 *
 * @package App\Models
 */
class Permission extends Model
{
	protected $table = 'permissions';

	protected $fillable = [
		'name',
		'display_name',
		'description'
	];

	public function roles()
	{
		return $this->belongsToMany(Role::class)
					->withTimestamps();
	}

	public function permission_user()
	{
		return $this->hasOne(PermissionUser::class);
	}
}
