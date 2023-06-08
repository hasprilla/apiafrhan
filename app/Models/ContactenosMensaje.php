<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactenosMensaje
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $reason
 * @property string|null $email
 * @property string|null $message
 * @property string|null $captcha_code
 * @property string|null $ip
 * @property Carbon $fecha
 *
 * @package App\Models
 */
class ContactenosMensaje extends Model
{
	protected $table = 'contactenos_mensajes';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'name',
		'reason',
		'email',
		'message',
		'captcha_code',
		'ip',
		'fecha'
	];
}
