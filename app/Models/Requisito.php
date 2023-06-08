<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requisito
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $codconvo
 * @property int|null $cod_opcional
 *
 * @package App\Models
 */
class Requisito extends Model
{
	protected $table = 'requisitos';
	public $timestamps = false;

	protected $casts = [
		'codconvo' => 'int',
		'cod_opcional' => 'int'
	];

	protected $fillable = [
		'nombre',
		'codconvo',
		'cod_opcional'
	];
}
