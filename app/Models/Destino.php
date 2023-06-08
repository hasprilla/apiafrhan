<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destino
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Destino extends Model
{
	protected $table = 'destino';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
