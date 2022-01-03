<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 * 
 * @property int $id
 * @property string $teacher_presence
 * @property int $teacher_id
 * @property int $room_id
 * @property int $grade_subject_id
 * @property int $student_id
 * @property Carbon $begin_hour
 * @property Carbon $end_hour
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'courses';

	protected $casts = [
		'teacher_id' => 'int',
		'room_id' => 'int',
		'grade_subject_id' => 'int',
		'student_id' => 'int'
	];

	protected $dates = [
		'begin_hour',
		'end_hour'
	];

	protected $fillable = [
		'teacher_presence',
		'teacher_id',
		'room_id',
		'grade_subject_id',
		'student_id',
		'begin_hour',
		'end_hour'
	];
}
