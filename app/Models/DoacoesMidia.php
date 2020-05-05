<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DoacoesMidia
 * 
 * @property int $midias_id
 * @property int $doacoes_id
 * 
 * @property Doacao $doaco
 * @property Midia $midia
 *
 * @package App\Models
 */
class DoacoesMidia extends Model
{
	protected $table = 'doacoes_midias';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'midias_id' => 'int',
		'doacoes_id' => 'int'
	];

	protected $fillable = [
		'midias_id',
		'doacoes_id'
	];

	public function doacao()
	{
		return $this->belongsTo(Doacao::class, 'doacoes_id');
	}

	public function midia()
	{
		return $this->belongsTo(Midia::class, 'midias_id');
	}
}
