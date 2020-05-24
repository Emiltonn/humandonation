<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property bool $verificado
 * @property int $perfis_id
 * 
 * @property Perfil $perfi
 * @property Collection|Contato[] $contatos
 * @property Collection|Doacao[] $doacos
 * @property Collection|Instituicao[] $instituicos
 * @property Collection|Pessoa[] $pessoas
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use Notifiable;

	protected $table = 'users';


	protected $dates = [
		'email_verified_at'
	];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name',
		'username',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'verificado',
		'perfis_id'
	];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
		'email_verified_at' => 'datetime',
		'verificado' => 'bool',
		'perfis_id' => 'int'
    ];


	public function perfil()
	{
		return $this->belongsTo(Perfil::class, 'perfis_id');
	}

	public function contatos()
	{
		return $this->belongsToMany(Contato::class, 'contatos_users', 'users_id', 'contatos_id');
	}

	public function doacoes()
	{
		return $this->hasMany(Doacao::class, 'users_id');
	}

	public function instituicoes()
	{
		return $this->hasMany(Instituicao::class, 'users_id');
	}

	public function pessoas()
	{
		return $this->hasMany(Pessoa::class, 'users_id');
	}
}
