<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminTipoPeticion
 * 
 * @property string $codigo
 * @property string $archivo
 *
 * @package App\Models
 */
class AdminTipoPeticion extends Model
{
	protected $table = 'admin_tipo_peticion';
	protected $primaryKey = 'codigo';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'archivo'
	];
}
