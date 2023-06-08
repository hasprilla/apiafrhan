<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Convocatorium
 * 
 * @property int $id
 * @property string|null $nombre
 * @property Carbon|null $fechainicio
 * @property Carbon|null $fechafinal
 * @property string|null $html
 * @property int|null $depto
 * @property int|null $ident
 * @property string|null $descripcion
 * @property int|null $periodoaca
 * @property int|null $estado
 *
 * @package App\Models
 */
class Convocatorium extends Model
{
	protected $table = 'convocatoria';
	public $timestamps = false;

	protected $casts = [
		'fechainicio' => 'datetime',
		'fechafinal' => 'datetime',
		'depto' => 'int',
		'ident' => 'int',
		'periodoaca' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'fechainicio',
		'fechafinal',
		'html',
		'depto',
		'ident',
		'descripcion',
		'periodoaca',
		'estado'
	];
}
