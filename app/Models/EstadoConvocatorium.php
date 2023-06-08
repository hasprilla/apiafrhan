<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoConvocatorium
 * 
 * @property int $id
 * @property int|null $aspirante
 * @property int|null $convocatoria
 * @property int|null $estado
 * @property string|null $_usuario
 * @property string|null $ip
 * @property Carbon|null $fecha
 * @property int|null $cod_rol_aspi
 * @property int $valorcontrato
 *
 * @package App\Models
 */
class EstadoConvocatorium extends Model
{
	protected $table = 'estado_convocatoria';
	public $timestamps = false;

	protected $casts = [
		'aspirante' => 'int',
		'convocatoria' => 'int',
		'estado' => 'int',
		'fecha' => 'datetime',
		'cod_rol_aspi' => 'int',
		'valorcontrato' => 'int'
	];

	protected $fillable = [
		'aspirante',
		'convocatoria',
		'estado',
		'_usuario',
		'ip',
		'fecha',
		'cod_rol_aspi',
		'valorcontrato'
	];
}
