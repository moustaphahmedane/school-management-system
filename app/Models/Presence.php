<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Presence
 * 
 * @property int $id
 * @property int $student_id
 * @property string $state
 * @property int $pattern
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Presence extends Model
{
	protected $table = 'presences';

	protected $casts = [
		'student_id' => 'int',
		'pattern' => 'int'
	];

	protected $fillable = [
		'student_id',
		'state',
		'pattern'
	];
}
