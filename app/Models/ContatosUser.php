<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContatosUser
 * 
 * @property int $contatos_id
 * @property int $users_id
 * 
 * @property Contato $contato
 * @property User $user
 *
 * @package App\Models
 */
class ContatosUser extends Model
{
	protected $table = 'contatos_users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'contatos_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'contatos_id',
		'users_id'
	];

	public function contato()
	{
		return $this->belongsTo(Contato::class, 'contatos_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
