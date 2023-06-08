<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Promedio
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Promedio extends Model
{
	protected $table = 'promedio';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
