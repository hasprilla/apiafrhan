<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Segumientotesi
 * 
 * @property int $id
 * @property int|null $id_persona
 * @property int|null $id_universidad
 * @property string|null $facultad
 * @property string|null $programa
 * @property string|null $titulo
 * @property int|null $id_area
 * @property int|null $id_periodo
 * @property int $idconvocatoria
 *
 * @package App\Models
 */
class Segumientotesi extends Model
{
	protected $table = 'segumientotesis';
	public $timestamps = false;

	protected $casts = [
		'id_persona' => 'int',
		'id_universidad' => 'int',
		'id_area' => 'int',
		'id_periodo' => 'int',
		'idconvocatoria' => 'int'
	];

	protected $fillable = [
		'id_persona',
		'id_universidad',
		'facultad',
		'programa',
		'titulo',
		'id_area',
		'id_periodo',
		'idconvocatoria'
	];
}
