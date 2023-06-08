<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Desembolso
 * 
 * @property int $id
 * @property int|null $cate_desen
 * @property string|null $valor
 * @property string|null $ano
 * @property int|null $persona_id
 *
 * @package App\Models
 */
class Desembolso extends Model
{
	protected $table = 'desembolsos';
	public $timestamps = false;

	protected $casts = [
		'cate_desen' => 'int',
		'persona_id' => 'int'
	];

	protected $fillable = [
		'cate_desen',
		'valor',
		'ano',
		'persona_id'
	];
}
