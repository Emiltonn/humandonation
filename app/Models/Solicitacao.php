<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitacao
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $descricao
 * @property string $titulo
 * @property string $quantidade
 * @property int $instituicoes_id
 * 
 * @property Instituicao $instituico
 * @property Collection|Doacao[] $doacos
 *
 * @package App\Models
 */
class Solicitacao extends Model
{
	protected $table = 'solicitacoes';

	protected $casts = [
		'instituicoes_id' => 'int'
	];

	protected $fillable = [
		'descricao',
		'titulo',
		'quantidade',
		'instituicoes_id'
	];

	public function instituicao()
	{
		return $this->belongsTo(Instituicao::class, 'instituicoes_id');
	}

	public function doacoes()
	{
		return $this->hasMany(Doacao::class, 'solicitacoes_id');
	}
}
