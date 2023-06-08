<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consolidadosava
 * 
 * @property int $id
 * @property string|null $convocatoria
 * @property string|null $nombre
 * @property int|null $identifica
 * @property string|null $programa
 * @property float|null $duracionanos
 * @property string|null $lineainvestigacion
 * @property string|null $universidad
 * @property string|null $ciudad
 * @property string|null $pais
 * @property string|null $fechainicio
 * @property string|null $fechafinalizacion
 * @property int|null $semetreafinanciar
 * @property float|null $montobe
 * @property string|null $totalfinanciado
 * @property string|null $saldo
 * @property string|null $ingles
 * @property string|null $observacion
 * @property string $semestre
 *
 * @package App\Models
 */
class Consolidadosava extends Model
{
	protected $table = 'consolidadosava';
	public $timestamps = false;

	protected $casts = [
		'identifica' => 'int',
		'duracionanos' => 'float',
		'semetreafinanciar' => 'int',
		'montobe' => 'float'
	];

	protected $fillable = [
		'convocatoria',
		'nombre',
		'identifica',
		'programa',
		'duracionanos',
		'lineainvestigacion',
		'universidad',
		'ciudad',
		'pais',
		'fechainicio',
		'fechafinalizacion',
		'semetreafinanciar',
		'montobe',
		'totalfinanciado',
		'saldo',
		'ingles',
		'observacion',
		'semestre'
	];
}
