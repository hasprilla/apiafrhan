<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alerta
 * 
 * @property string $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Alerta extends Model
{
	protected $table = 'alertas';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
