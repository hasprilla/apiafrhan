<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolAspirante
 * 
 * @property int $codigo
 * @property string|null $nombre
 *
 * @package App\Models
 */
class RolAspirante extends Model
{
	protected $table = 'rol_aspirante';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
