<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminMenu
 * 
 * @property string $codigo
 * @property string|null $padre
 * @property string $nombre
 * @property string|null $ruta
 * @property string|null $tipo
 * @property string|null $accion
 * @property int $orden
 * @property int $estado
 * @property string|null $visibilidad
 * @property string|null $sistema
 * @property string|null $mp
 * @property string|null $icono
 * @property string|null $pageapp
 *
 * @package App\Models
 */
class AdminMenu extends Model
{
	protected $table = 'admin_menu';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'orden' => 'int',
		'estado' => 'int'
	];

	protected $fillable = [
		'padre',
		'nombre',
		'ruta',
		'tipo',
		'accion',
		'orden',
		'estado',
		'visibilidad',
		'sistema',
		'mp',
		'icono',
		'pageapp'
	];
}
