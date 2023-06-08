<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modalidad
 * 
 * @property int $id
 * @property string $nombre
 *
 * @package App\Models
 */
class Modalidad extends Model
{
	protected $table = 'modalidad';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
