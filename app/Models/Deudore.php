<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Deudore
 * 
 * @property int $id
 * @property string|null $persona_id
 * @property int|null $convocatoria
 * @property string|null $mensaje
 * @property int|null $estado
 *
 * @package App\Models
 */
class Deudore extends Model
{
	protected $table = 'deudores';
	public $timestamps = false;

	protected $casts = [
		'convocatoria' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'persona_id',
		'convocatoria',
		'mensaje',
		'estado'
	];
}
