<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubcategoriasNov
 * 
 * @property int $id
 * @property string|null $nombre
 * @property int|null $cate_nov
 * @property string|null $estado
 *
 * @package App\Models
 */
class SubcategoriasNov extends Model
{
	protected $table = 'subcategorias_nov';
	public $timestamps = false;

	protected $casts = [
		'cate_nov' => 'int'
	];

	protected $fillable = [
		'nombre',
		'cate_nov',
		'estado'
	];
}
