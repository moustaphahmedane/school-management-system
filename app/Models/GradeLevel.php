<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GradeLevel
 * 
 * @property int $id
 * @property string $libelle
 * @property Carbon $school_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class GradeLevel extends Model
{
	protected $table = 'grade_levels';

	protected $dates = [
		'school_year'
	];

	protected $fillable = [
		'libelle',
		'school_year'
	];
}
