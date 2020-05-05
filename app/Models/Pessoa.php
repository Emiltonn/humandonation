<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pessoa
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $cpf
 * @property string $nome
 * @property Carbon $data_nascimento
 * @property int $users_id
 * @property int $enderecos_id
 * 
 * @property Endereco $endereco
 * @property User $user
 *
 * @package App\Models
 */
class Pessoa extends Model
{
	protected $table = 'pessoas';

	protected $casts = [
		'users_id' => 'int',
		'enderecos_id' => 'int'
	];

	protected $dates = [
		'data_nascimento'
	];

	protected $fillable = [
		'cpf',
		'nome',
		'data_nascimento',
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
}
