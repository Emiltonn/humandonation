<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Endereco
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $cep
 * @property string $logradouro
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * 
 * @property Collection|Instituicao[] $instituicos
 * @property Collection|Pessoa[] $pessoas
 *
 * @package App\Models
 */
class Endereco extends Model
{
	protected $table = 'enderecos';

	protected $fillable = [
		'cep',
		'logradouro',
		'numero',
		'bairro',
		'cidade',
		'uf'
	];

	public function instituicoes()
	{
		return $this->hasMany(Instituicao::class, 'enderecos_id');
	}

	public function pessoas()
	{
		return $this->hasMany(Pessoa::class, 'enderecos_id');
	}
}
