<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aud
 * 
 * @property int $id
 * @property string|null $ip
 * @property Carbon $fecha
 * @property string|null $identificador
 * @property string|null $modulo
 * @property string|null $accion
 * @property string|null $_usuario
 * @property string|null $nombre_naveg
 * @property string|null $version_naveg
 * @property string|null $plataforma
 * @property string|null $agente
 * @property string|null $idr
 * @property string|null $url
 *
 * @package App\Models
 */
class Aud extends Model
{
	protected $table = 'aud';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'ip',
		'fecha',
		'identificador',
		'modulo',
		'accion',
		'_usuario',
		'nombre_naveg',
		'version_naveg',
		'plataforma',
		'agente',
		'idr',
		'url'
	];
}
