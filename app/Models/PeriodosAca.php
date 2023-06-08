<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PeriodosAca
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int $estado
 *
 * @package App\Models
 */
class PeriodosAca extends Model
{
	protected $table = 'periodos_aca';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'int'
	];

	protected $fillable = [
		'nombre',
		'estado'
	];
}
