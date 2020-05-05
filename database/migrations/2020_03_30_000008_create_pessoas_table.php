<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pessoas';

    /**
     * Run the migrations.
     * @table pessoas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('cpf')->nullable();
            $table->string('nome', 45)->nullable();
            $table->date('data_nascimento')->nullable();
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
