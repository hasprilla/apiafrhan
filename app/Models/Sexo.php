<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sexo
 * 
 * @property int $codigo
 * @property string $nombre
 *
 * @package App\Models
 */
class Sexo extends Model
{
	protected $table = 'sexo';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
