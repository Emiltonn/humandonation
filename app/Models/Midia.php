<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Midia
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $url
 * @property string $nome
 * @property string $path
 * 
 * @property Collection|Doacao[] $doacos
 *
 * @package App\Models
 */
class Midia extends Model
{
	protected $table = 'midias';

	protected $fillable = [
		'url',
		'nome',
		'path'
	];

	public function doacoes()
	{
		return $this->belongsToMany(Doacao::class, 'doacoes_midias', 'midias_id', 'doacoes_id');
	}
}
