<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UbicacionInstutucion
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class UbicacionInstutucion extends Model
{
	protected $table = 'ubicacion_instutucion';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
