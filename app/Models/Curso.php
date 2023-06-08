<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $persona_id
 * @property string|null $imagen
 *
 * @package App\Models
 */
class Curso extends Model
{
	protected $table = 'cursos';
	public $timestamps = false;

	protected $casts = [
		'persona_id' => 'int'
	];

	protected $fillable = [
		'nombre',
		'persona_id',
		'imagen'
	];
}
