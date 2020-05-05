<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Instituicao
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $nome
 * @property string $cnpj
 * @property string $descricao
 * @property int $users_id
 * @property int $enderecos_id
 * 
 * @property Endereco $endereco
 * @property User $user
 * @property Collection|Causa[] $causas
 * @property Collection|Doacao[] $doacos
 * @property Collection|Contato[] $contatos
 * @property Collection|Solicitacao[] $solicitacos
 *
 * @package App\Models
 */
class Instituicao extends Model
{
	protected $table = 'instituicoes';

	protected $casts = [
		'users_id' => 'int',
		'enderecos_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'cnpj',
		'descricao',
		'users_id',
		'enderecos_id'
	];

	public function endereco()
	{
		return $this->belongsTo(Endereco::class, 'enderecos_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function causas()
	{
		return $this->hasMany(Causa::class, 'instituicoes_id');
	}

	public function doacoes()
	{
		return $this->hasMany(Doacao::class, 'instituicoes_id');
	}

	public function contatos()
	{
		return $this->belongsToMany(Contato::class, 'instituicoes_contatos', 'instituicoes_id', 'contatos_id');
	}

	public function solicitacoes()
	{
		return $this->hasMany(Solicitacao::class, 'instituicoes_id');
	}
}
