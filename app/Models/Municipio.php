<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Municipio
 * 
 * @property int $codigo
 * @property string $nombre
 * @property int $depto
 *
 * @package App\Models
 */
class Municipio extends Model
{
	protected $table = 'municipios';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $casts = [
		'depto' => 'int'
	];

	protected $fillable = [
		'nombre',
		'depto'
	];
}
