<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Me
 * 
 * @property int $codigo
 * @property string $nombre
 * @property string $alias
 *
 * @package App\Models
 */
class Me extends Model
{
	protected $table = 'mes';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'alias'
	];
}
