<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Parent
 * 
 * @property int $id
 * @property string $name
 * @property string $middle_name
 * @property string $adress
 * @property string $phone
 * @property string $e-mail
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Parent extends Model
{
	protected $table = 'parents';

	protected $fillable = [
		'name',
		'middle_name',
		'adress',
		'phone',
		'e-mail'
	];
}
