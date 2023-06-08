<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensaje
 * 
 * @property int $id
 * @property string|null $menu
 * @property string|null $clase
 * @property string|null $html
 *
 * @package App\Models
 */
class Mensaje extends Model
{
	protected $table = 'mensajes';
	public $timestamps = false;

	protected $fillable = [
		'menu',
		'clase',
		'html'
	];
}
