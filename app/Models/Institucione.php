<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institucione
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $identificador
 *
 * @package App\Models
 */
class Institucione extends Model
{
	protected $table = 'instituciones';
	public $timestamps = false;

	protected $casts = [
		'identificador' => 'int'
	];

	protected $fillable = [
		'nombre',
		'identificador'
	];
}
