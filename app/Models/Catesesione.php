<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catesesione
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $menu
 *
 * @package App\Models
 */
class Catesesione extends Model
{
	protected $table = 'catesesiones';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'menu'
	];
}
