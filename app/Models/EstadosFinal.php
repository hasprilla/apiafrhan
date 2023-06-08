<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosFinal
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class EstadosFinal extends Model
{
	protected $table = 'estados_final';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
