<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Schedule
 * 
 * @property int $id
 * @property int $grade_subjects_id
 * @property string $day
 * @property Carbon $begin_hour
 * @property Carbon $end_hour
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Schedule extends Model
{
	protected $table = 'schedules';

	protected $casts = [
		'grade_subjects_id' => 'int'
	];

	protected $dates = [
		'begin_hour',
		'end_hour'
	];

	protected $fillable = [
		'grade_subjects_id',
		'day',
		'begin_hour',
		'end_hour'
	];
}
