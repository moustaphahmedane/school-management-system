<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Registration
 * 
 * @property int $id
 * @property int $student_id
 * @property int $grade_id
 * @property Carbon $registration_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Registration extends Model
{
	protected $table = 'registrations';

	protected $casts = [
		'student_id' => 'int',
		'grade_id' => 'int'
	];

	protected $dates = [
		'registration_date'
	];

	protected $fillable = [
		'student_id',
		'grade_id',
		'registration_date'
	];
}
