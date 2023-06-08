<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Configurarempresa
 * 
 * @property string $nit
 * @property string|null $aplicativo
 * @property string|null $grupo
 * @property string|null $empresa
 * @property string|null $usuario
 * @property Carbon $_fecha
 *
 * @package App\Models
 */
class Configurarempresa extends Model
{
	protected $table = 'configurarempresa';
	protected $primaryKey = 'nit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'_fecha' => 'datetime'
	];

	protected $fillable = [
		'aplicativo',
		'grupo',
		'empresa',
		'usuario',
		'_fecha'
	];
}
