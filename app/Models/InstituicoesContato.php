<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InstituicoesContato
 * 
 * @property int $contatos_id
 * @property int $instituicoes_id
 * 
 * @property Contato $contato
 * @property Instituicao $instituico
 *
 * @package App\Models
 */
class InstituicoesContato extends Model
{
	protected $table = 'instituicoes_contatos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'contatos_id' => 'int',
		'instituicoes_id' => 'int'
	];

	protected $fillable = [
		'contatos_id',
		'instituicoes_id'
	];

	public function contato()
	{
		return $this->belongsTo(Contato::class, 'contatos_id');
	}

	public function instituicao()
	{
		return $this->belongsTo(Instituicao::class, 'instituicoes_id');
	}
}
