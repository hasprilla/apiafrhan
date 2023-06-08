<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 * 
 * @property int $codigo
 * @property string $nombre
 * @property string $codpais
 *
 * @package App\Models
 */
class Departamento extends Model
{
	protected $table = 'departamentos';
	protected $primaryKey = 'codigo';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'codpais'
	];
}
