<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Archivo
 * 
 * @property int $id
 * @property int|null $convocatoria
 * @property int|null $institucion
 * @property int|null $programa
 * @property string|null $archivo
 * @property string|null $archivo_nombre
 * @property string|null $archivo_peso
 * @property string|null $archivo_tipo
 * @property Carbon $fecha
 * @property int|null $persona_id
 * @property int|null $idar
 * @property int|null $cod_periodo
 * @property Carbon|null $fechaarchivo
 * @property int|null $cod_rol_aspri
 * @property int $estado
 * @property string|null $ruta
 *
 * @package App\Models
 */
class Archivo extends Model
{
	protected $table = 'archivos';
	public $timestamps = false;

	protected $casts = [
		'convocatoria' => 'int',
		'institucion' => 'int',
		'programa' => 'int',
		'fecha' => 'datetime',
		'persona_id' => 'int',
		'idar' => 'int',
		'cod_periodo' => 'int',
		'fechaarchivo' => 'datetime',
		'cod_rol_aspri' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'convocatoria',
		'institucion',
		'programa',
		'archivo',
		'archivo_nombre',
		'archivo_peso',
		'archivo_tipo',
		'fecha',
		'persona_id',
		'idar',
		'cod_periodo',
		'fechaarchivo',
		'cod_rol_aspri',
		'estado',
		'ruta'
	];
}
