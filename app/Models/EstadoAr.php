<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoAr
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class EstadoAr extends Model
{
	protected $table = 'estado_ar';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
