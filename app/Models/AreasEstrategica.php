<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreasEstrategica
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class AreasEstrategica extends Model
{
	protected $table = 'areas_estrategicas';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
