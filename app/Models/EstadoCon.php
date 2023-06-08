<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoCon
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class EstadoCon extends Model
{
	protected $table = 'estado_con';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nombre'
	];
}
