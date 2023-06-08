<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contenido
 * 
 * @property int $id
 * @property string $titulo
 * @property string $html
 * @property int|null $cod_catecon
 * @property int $codtipopubli
 * @property int|null $codsesion
 * @property string|null $menu
 * @property string $_usuario
 * @property Carbon $_fecha
 * @property Carbon|null $fechaeven
 * @property int|null $cod_opcionales
 *
 * @package App\Models
 */
class Contenido extends Model
{
	protected $table = 'contenido';
	public $timestamps = false;

	protected $casts = [
		'cod_catecon' => 'int',
		'codtipopubli' => 'int',
		'codsesion' => 'int',
		'_fecha' => 'datetime',
		'fechaeven' => 'datetime',
		'cod_opcionales' => 'int'
	];

	protected $fillable = [
		'titulo',
		'html',
		'cod_catecon',
		'codtipopubli',
		'codsesion',
		'menu',
		'_usuario',
		'_fecha',
		'fechaeven',
		'cod_opcionales'
	];
}
