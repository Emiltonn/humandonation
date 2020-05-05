<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituicoesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'instituicoes';

    /**
     * Run the migrations.
     * @table instituicoes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 255)->nullable();
            $table->string('cnpj', 14)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('enderecos_id')->constrained('enderecos');
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
