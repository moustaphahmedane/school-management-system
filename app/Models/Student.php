<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $name
 * @property string $middle_name
 * @property string $registration
 * @property string $gender
 *
 * @property string $grade
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';

	protected $fillable = [
		'name',
		'middle_name',
		'registration',
		'gender',
		'grade'
	];
}
