<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consilidado
 * 
 * @property int $id
 * @property int|null $convocatoria
 * @property int|null $persona_id
 * @property string|null $programaes
 * @property string|null $duraciones
 * @property string|null $lineainest
 * @property string|null $universidad
 * @property string|null $ciudad
 * @property string|null $pais
 * @property Carbon|null $fechainicioes
 * @property Carbon|null $fechaentregaes
 * @property int|null $semestrefinanciacion
 * @property int|null $vaorcontrato
 * @property int|null $totalgirado
 * @property int|null $saldo
 * @property int|null $estadocursoingles
 * @property int|null $obsevacion
 *
 * @package App\Models
 */
class Consilidado extends Model
{
	protected $table = 'consilidados';
	public $timestamps = false;

	protected $casts = [
		'convocatoria' => 'int',
		'persona_id' => 'int',
		'fechainicioes' => 'datetime',
		'fechaentregaes' => 'datetime',
		'semestrefinanciacion' => 'int',
		'vaorcontrato' => 'int',
		'totalgirado' => 'int',
		'saldo' => 'int',
		'estadocursoingles' => 'int',
		'obsevacion' => 'int'
	];

	protected $fillable = [
		'convocatoria',
		'persona_id',
		'programaes',
		'duraciones',
		'lineainest',
		'universidad',
		'ciudad',
		'pais',
		'fechainicioes',
		'fechaentregaes',
		'semestrefinanciacion',
		'vaorcontrato',
		'totalgirado',
		'saldo',
		'estadocursoingles',
		'obsevacion'
	];
}
