<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'doacoes';

    /**
     * Run the migrations.
     * @table doacoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descricao', 45)->nullable();
            $table->integer('quantidade')->nullable();
            $table->boolean('retirada')->nullable();
            $table->float('peso', 8, 2)->nullable();
            $table->foreignId('solicitacoes_id')->constrained('solicitacoes');
            $table->foreignId('estados_conservacao_id')->constrained('estados_conservacao');
            $table->foreignId('categorias_id')->constrained('categorias');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('instituicoes_id')->constrained('instituicoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
