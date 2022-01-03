<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 * 
 * @property int $id
 * @property Carbon $school_year
 * @property int $room_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Grade extends Model
{
	protected $table = 'grades';

	protected $casts = [
		'room_id' => 'int'
	];

	protected $dates = [
		'school_year'
	];

	protected $fillable = [
		'school_year',
		'room_id'
	];
}
