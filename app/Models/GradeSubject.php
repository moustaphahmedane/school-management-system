<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GradeSubject
 * 
 * @property int $id
 * @property int $teacher_id
 * @property int $grade_id
 * @property int $subject_id
 * @property Carbon $school_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class GradeSubject extends Model
{
	protected $table = 'grade_subjects';

	protected $casts = [
		'teacher_id' => 'int',
		'grade_id' => 'int',
		'subject_id' => 'int'
	];

	protected $dates = [
		'school_year'
	];

	protected $fillable = [
		'teacher_id',
		'grade_id',
		'subject_id',
		'school_year'
	];
}
