<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriasConv
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class CategoriasConv extends Model
{
	protected $table = 'categorias_conv';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
