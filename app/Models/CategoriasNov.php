<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriasNov
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class CategoriasNov extends Model
{
	protected $table = 'categorias_nov';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
