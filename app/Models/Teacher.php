<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 * 
 * @property int $id
 * @property string $name
 * @property string $middle_name
 * @property string $registration
 * @property string $gender
 * @property string $photo
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Teacher extends Model
{
	protected $table = 'teachers';

	protected $fillable = [
		'name',
		'middle_name',
		'registration',
		'gender',
		'photo',
		'email'
	];
}
