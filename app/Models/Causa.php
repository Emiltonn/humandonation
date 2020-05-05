<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Causa
 * 
 * @property int $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $nome
 * @property string $descricao
 * @property bool $primaria
 * @property int $instituicoes_id
 * 
 * @property Instituicao $instituico
 *
 * @package App\Models
 */
class Causa extends Model
{
	protected $table = 'causas';

	protected $casts = [
		'primaria' => 'bool',
		'instituicoes_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao',
		'primaria',
		'instituicoes_id'
	];

	public function instituicao()
	{
		return $this->belongsTo(Instituicao::class, 'instituicoes_id');
	}
}
