<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Opcionale
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Opcionale extends Model
{
	protected $table = 'opcionales';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
