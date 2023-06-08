<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipoconvocatorium
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Tipoconvocatorium extends Model
{
	protected $table = 'tipoconvocatoria';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
