<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doacao
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $descricao
 * @property int $quantidade
 * @property bool $retirada
 * @property float $peso
 * @property int $solicitacoes_id
 * @property int $estados_conservacao_id
 * @property int $categorias_id
 * @property int $users_id
 * @property int $instituicoes_id
 * 
 * @property Categoria $categoria
 * @property EstadosConservacao $estados_conservacao
 * @property Instituicao $instituico
 * @property Solicitacao $solicitaco
 * @property User $user
 * @property Collection|Midia[] $midias
 *
 * @package App\Models
 */
class Doacao extends Model
{
	protected $table = 'doacoes';

	protected $casts = [
		'quantidade' => 'int',
		'retirada' => 'bool',
		'solicitacoes_id' => 'int',
		'estados_conservacao_id' => 'int',
		'categorias_id' => 'int',
		'users_id' => 'int',
		'instituicoes_id' => 'int'
	];

	protected $fillable = [
		'descricao',
		'quantidade',
		'retirada',
		'peso',
		'solicitacoes_id',
		'estados_conservacao_id',
		'categorias_id',
		'users_id',
		'instituicoes_id'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'categorias_id');
	}

	public function estados_conservacao()
	{
		return $this->belongsTo(EstadosConservacao::class);
	}

	public function instituicao()
	{
		return $this->belongsTo(Instituicao::class, 'instituicoes_id');
	}

	public function solicitacao()
	{
		return $this->belongsTo(Solicitacao::class, 'solicitacoes_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function midias()
	{
		return $this->belongsToMany(Midia::class, 'doacoes_midias', 'doacoes_id', 'midias_id');
	}
}
