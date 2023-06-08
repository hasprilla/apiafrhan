<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminMenuRol
 * 
 * @property int $id
 * @property int $rol
 * @property string $menu
 *
 * @package App\Models
 */
class AdminMenuRol extends Model
{
	protected $table = 'admin_menu_rol';
	public $timestamps = false;

	protected $casts = [
		'rol' => 'int'
	];

	protected $fillable = [
		'rol',
		'menu'
	];
}
