<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Doacao[] $doacos
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';

	protected $fillable = [
		'nome',
		'descricao'
	];

	public function doacoes()
	{
		return $this->hasMany(Doacao::class, 'categorias_id');
	}
}
