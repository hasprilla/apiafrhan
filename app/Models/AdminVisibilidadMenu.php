<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminVisibilidadMenu
 * 
 * @property string $codigo
 * @property string $descripcion
 *
 * @package App\Models
 */
class AdminVisibilidadMenu extends Model
{
	protected $table = 'admin_visibilidad_menu';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
