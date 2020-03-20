<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminOrderWidget
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class AdminOrderWidget extends Model
{
	protected $table = 'admin_order_widgets';
}
