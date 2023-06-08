<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadotramite
 * 
 * @property int $id
 * @property string $nombre
 *
 * @package App\Models
 */
class Estadotramite extends Model
{
	protected $table = 'estadotramite';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
