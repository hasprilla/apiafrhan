<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sistema
 * 
 * @property int $id
 * @property string|null $descripcion
 * @property string|null $sigla
 * @property string|null $ruta
 *
 * @package App\Models
 */
class Sistema extends Model
{
	protected $table = 'sistema';
	public $timestamps = false;

	protected $fillable = [
		'descripcion',
		'sigla',
		'ruta'
	];
}
