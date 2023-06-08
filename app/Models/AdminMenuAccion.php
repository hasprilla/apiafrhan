<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminMenuAccion
 * 
 * @property int $id
 * @property string $menu
 * @property string $descripcion
 * @property string $accion
 * @property string $tipo
 * @property string $archivo
 * @property string|null $sistema
 * @property string|null $funcion
 * @property int|null $orden
 *
 * @package App\Models
 */
class AdminMenuAccion extends Model
{
	protected $table = 'admin_menu_accion';
	public $timestamps = false;

	protected $casts = [
		'orden' => 'int'
	];

	protected $fillable = [
		'menu',
		'descripcion',
		'accion',
		'tipo',
		'archivo',
		'sistema',
		'funcion',
		'orden'
	];
}
