<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 * 
 * @property int $id
 * @property string|null $identifica
 * @property string|null $tipoide
 * @property string|null $apellido1
 * @property string|null $apellido2
 * @property string|null $nombre1
 * @property string|null $nombre2
 * @property Carbon|null $fechanaci
 * @property int|null $sexo
 * @property string|null $direccion
 * @property string|null $correo
 * @property string|null $telefono
 * @property string|null $clave
 * @property string|null $tag
 * @property Carbon $fecha
 * @property string|null $imagen
 * @property int|null $mupio
 * @property string|null $tituloob
 * @property float|null $promedio
 * @property int|null $convocatoria
 * @property string|null $seguridad
 * @property int|null $notificac
 * @property int|null $termino
 * @property int|null $coddepto
 *
 * @package App\Models
 */
class Persona extends Model
{
	protected $table = 'personas';
	public $timestamps = false;

	protected $casts = [
		'fechanaci' => 'datetime',
		'sexo' => 'int',
		'fecha' => 'datetime',
		'mupio' => 'int',
		'promedio' => 'float',
		'convocatoria' => 'int',
		'notificac' => 'int',
		'termino' => 'int',
		'coddepto' => 'int'
	];

	protected $fillable = [
		'identifica',
		'tipoide',
		'apellido1',
		'apellido2',
		'nombre1',
		'nombre2',
		'fechanaci',
		'sexo',
		'direccion',
		'correo',
		'telefono',
		'clave',
		'tag',
		'fecha',
		'imagen',
		'mupio',
		'tituloob',
		'promedio',
		'convocatoria',
		'seguridad',
		'notificac',
		'termino',
		'coddepto'
	];
}
