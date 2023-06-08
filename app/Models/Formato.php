<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formato
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class Formato extends Model
{
	protected $table = 'formatos';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
