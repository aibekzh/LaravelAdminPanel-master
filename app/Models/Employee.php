<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $status
 * @property string $remember_token
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';

	protected $casts = [
		'status' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'status',
		'remember_token'
	];
}
