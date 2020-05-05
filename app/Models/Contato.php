<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contato
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $contato
 * @property int $tipos_contato_id
 * 
 * @property TiposContato $tipos_contato
 * @property Collection|User[] $users
 * @property Collection|Instituicao[] $instituicos
 *
 * @package App\Models
 */
class Contato extends Model
{
	protected $table = 'contatos';

	protected $casts = [
		'tipos_contato_id' => 'int'
	];

	protected $fillable = [
		'contato',
		'tipos_contato_id'
	];

	public function tipos_contato()
	{
		return $this->belongsTo(TiposContato::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'contatos_users', 'contatos_id', 'users_id');
	}

	public function instituicoes()
	{
		return $this->belongsToMany(Instituicao::class, 'instituicoes_contatos', 'contatos_id', 'instituicoes_id');
	}
}
