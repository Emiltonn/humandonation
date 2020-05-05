<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposContato
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $nome
 * @property string $descricao
 * 
 * @property Collection|Contato[] $contatos
 *
 * @package App\Models
 */
class TiposContato extends Model
{
	protected $table = 'tipos_contato';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function contatos()
	{
		return $this->hasMany(Contato::class);
	}
}
