<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Test1
 * 
 * @property int $id
 * @property string|null $name
 * @property int|null $age
 *
 * @package App\Models
 */
class Test1 extends Model
{
	protected $table = 'test1';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int'
	];

	protected $fillable = [
		'name',
		'age'
	];
}
