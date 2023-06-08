<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Novedade
 * 
 * @property int $id
 * @property int|null $convocatoria
 * @property string|null $archivo_nombre
 * @property string|null $archivo
 * @property string|null $archivo_peso
 * @property Carbon $fecha
 * @property string|null $archivo_tipo
 * @property int|null $persona_id
 * @property int|null $cod_periodo
 * @property string|null $descripcion
 * @property int|null $cate_nov
 * @property int $subcate_cov
 * @property string $valor
 * @property string $numero
 * @property Carbon $fechap
 * @property int|null $estadotra
 * @property int|null $promedioaca
 * @property int|null $estado
 * @property string|null $estadoa
 * @property int $modali
 * @property int $promedioacas
 * @property string $sosteminimiento
 * @property string $ingles
 * @property string $tiquetes
 * @property string $tesis
 * @property Carbon|null $fechaar
 *
 * @package App\Models
 */
class Novedade extends Model
{
	protected $table = 'novedades';
	public $timestamps = false;

	protected $casts = [
		'convocatoria' => 'int',
		'fecha' => 'datetime',
		'persona_id' => 'int',
		'cod_periodo' => 'int',
		'cate_nov' => 'int',
		'subcate_cov' => 'int',
		'fechap' => 'datetime',
		'estadotra' => 'int',
		'promedioaca' => 'int',
		'estado' => 'int',
		'modali' => 'int',
		'promedioacas' => 'int',
		'fechaar' => 'datetime'
	];

	protected $fillable = [
		'convocatoria',
		'archivo_nombre',
		'archivo',
		'archivo_peso',
		'fecha',
		'archivo_tipo',
		'persona_id',
		'cod_periodo',
		'descripcion',
		'cate_nov',
		'subcate_cov',
		'valor',
		'numero',
		'fechap',
		'estadotra',
		'promedioaca',
		'estado',
		'estadoa',
		'modali',
		'promedioacas',
		'sosteminimiento',
		'ingles',
		'tiquetes',
		'tesis',
		'fechaar'
	];
}
