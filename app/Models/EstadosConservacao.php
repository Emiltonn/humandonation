<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosConservacao
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $nome
 * @property string $descricao
 * 
 * @property Collection|Doacao[] $doacos
 *
 * @package App\Models
 */
class EstadosConservacao extends Model
{
	protected $table = 'estados_conservacao';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function doacoes()
	{
		return $this->hasMany(Doacao::class);
	}
}
