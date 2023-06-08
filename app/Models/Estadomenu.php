<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadomenu
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Estadomenu extends Model
{
	protected $table = 'estadomenu';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nombre'
	];
}
