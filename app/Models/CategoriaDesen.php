<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriaDesen
 * 
 * @property int $id
 * @property string|null $nombre
 *
 * @package App\Models
 */
class CategoriaDesen extends Model
{
	protected $table = 'categoria_desen';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];
}
