<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminRol
 * 
 * @property int $id
 * @property string $nombre
 * @property string|null $_usuario
 * @property Carbon|null $_fecha
 *
 * @package App\Models
 */
class AdminRol extends Model
{
	protected $table = 'admin_rol';
	public $timestamps = false;

	protected $casts = [
		'_fecha' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'_usuario',
		'_fecha'
	];
}
