<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadosingle
 * 
 * @property int $id
 * @property string $nombre
 *
 * @package App\Models
 */
class Estadosingle extends Model
{
	protected $table = 'estadosingles';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
