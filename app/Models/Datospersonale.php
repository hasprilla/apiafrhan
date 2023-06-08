<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Datospersonale
 * 
 * @property int $persona_id
 * @property int $institucion
 * @property string $programa
 * @property string $duracion
 * @property string $academicoa
 * @property string $restante
 * @property Carbon $fecha
 * @property string $ip
 * @property string|null $ubicacion
 *
 * @package App\Models
 */
class Datospersonale extends Model
{
	protected $table = 'datospersonales';
	protected $primaryKey = 'persona_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'persona_id' => 'int',
		'institucion' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'institucion',
		'programa',
		'duracion',
		'academicoa',
		'restante',
		'fecha',
		'ip',
		'ubicacion'
	];
}
