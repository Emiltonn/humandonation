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
 * @property string $nome
 * @property string $descricao
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Perfil extends Model
{
	protected $table = 'perfis';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'perfis_id');
	}
}
