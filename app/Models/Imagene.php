<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagene
 * 
 * @property int $id
 * @property string $ruta
 * @property string $descripcion
 * @property int $posicion
 * @property string|null $url
 * @property string|null $titulo
 * @property int|null $cod_est_img
 *
 * @package App\Models
 */
class Imagene extends Model
{
	protected $table = 'imagenes';
	public $timestamps = false;

	protected $casts = [
		'posicion' => 'int',
		'cod_est_img' => 'int'
	];

	protected $fillable = [
		'ruta',
		'descripcion',
		'posicion',
		'url',
		'titulo',
		'cod_est_img'
	];
}
