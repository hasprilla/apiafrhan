<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Condonacion
 * 
 * @property int $id
 * @property int $persona_id
 * @property string $nombre
 * @property string $ruta
 * @property int $orden
 *
 * @package App\Models
 */
class Condonacion extends Model
{
	protected $table = 'condonacion';
	public $timestamps = false;

	protected $casts = [
		'persona_id' => 'int',
		'orden' => 'int'
	];

	protected $fillable = [
		'persona_id',
		'nombre',
		'ruta',
		'orden'
	];
}
