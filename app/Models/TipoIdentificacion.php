<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoIdentificacion
 * 
 * @property string $codigo
 * @property string $nombre
 * @property string $codigo_snies
 *
 * @package App\Models
 */
class TipoIdentificacion extends Model
{
	protected $table = 'tipo_identificacion';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'codigo_snies'
	];
}
