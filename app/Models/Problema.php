<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Perfil
 *
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $email
 * @property string $descricao
 *
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Problema extends Model
{
	protected $table = 'problemas';

	protected $fillable = [
		'email',
		'descricao'
	];
}
