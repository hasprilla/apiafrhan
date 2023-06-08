<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuracion
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $correo
 * @property string|null $identificador
 * @property string|null $subtitolo
 *
 * @package App\Models
 */
class Configuracion extends Model
{
	protected $table = 'configuracion';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'correo',
		'identificador',
		'subtitolo'
	];
}
