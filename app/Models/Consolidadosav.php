<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consolidadosav
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
 * @property string|null $semestre
 * @property string|null $observacion
 * @property int|null $matricula1
 * @property int|null $matricula2
 * @property int|null $matricula3
 * @property int|null $matricula4
 * @property int|null $matricula5
 * @property int|null $matricula6
 * @property int|null $matricula7
 * @property int|null $matricula8
 * @property int|null $sostenimiento1
 * @property int|null $sostenimiento2
 * @property int|null $sostenimiento3
 * @property int|null $sostenimiento4
 * @property int|null $sostenimiento5
 * @property int|null $sostenimiento6
 * @property int|null $sostenimiento7
 * @property int|null $sostenimiento8
 * @property int|null $tesis
 * @property int|null $tiquetes
 * @property int|null $ringles
 *
 * @package App\Models
 */
class Consolidadosav extends Model
{
	protected $table = 'consolidadosav';
	public $timestamps = false;

	protected $casts = [
		'identifica' => 'int',
		'duracionanos' => 'float',
		'semetreafinanciar' => 'int',
		'montobe' => 'float',
		'matricula1' => 'int',
		'matricula2' => 'int',
		'matricula3' => 'int',
		'matricula4' => 'int',
		'matricula5' => 'int',
		'matricula6' => 'int',
		'matricula7' => 'int',
		'matricula8' => 'int',
		'sostenimiento1' => 'int',
		'sostenimiento2' => 'int',
		'sostenimiento3' => 'int',
		'sostenimiento4' => 'int',
		'sostenimiento5' => 'int',
		'sostenimiento6' => 'int',
		'sostenimiento7' => 'int',
		'sostenimiento8' => 'int',
		'tesis' => 'int',
		'tiquetes' => 'int',
		'ringles' => 'int'
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
		'semestre',
		'observacion',
		'matricula1',
		'matricula2',
		'matricula3',
		'matricula4',
		'matricula5',
		'matricula6',
		'matricula7',
		'matricula8',
		'sostenimiento1',
		'sostenimiento2',
		'sostenimiento3',
		'sostenimiento4',
		'sostenimiento5',
		'sostenimiento6',
		'sostenimiento7',
		'sostenimiento8',
		'tesis',
		'tiquetes',
		'ringles'
	];
}
