<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminUsuario
 * 
 * @property int $persona_id
 * @property int $rol
 * @property string $_usuario
 * @property Carbon $_fecha
 * @property int|null $cod_est_me
 * @property string|null $nombre
 * @property string|null $token
 *
 * @package App\Models
 */
class AdminUsuario extends Model
{
	protected $table = 'admin_usuario';
	protected $primaryKey = 'persona_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'persona_id' => 'int',
		'rol' => 'int',
		'_fecha' => 'datetime',
		'cod_est_me' => 'int'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'rol',
		'_usuario',
		'_fecha',
		'cod_est_me',
		'nombre',
		'token'
	];
}
