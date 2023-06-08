<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 * 
 * @property int $id
 * @property string $_usuario
 * @property string $comentario
 * @property Carbon $fecha
 * @property string $ip
 * @property int $nid
 *
 * @package App\Models
 */
class Comentario extends Model
{
	protected $table = 'comentarios';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'nid' => 'int'
	];

	protected $fillable = [
		'_usuario',
		'comentario',
		'fecha',
		'ip',
		'nid'
	];
}
