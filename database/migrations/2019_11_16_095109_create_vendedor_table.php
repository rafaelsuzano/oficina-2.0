<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //cria a tabela com as colunas indicadas
    public function up()
    {
        Schema::create('vendedor', function (Blueprint $table) {
            $table->bigIncrements('id'); //chave primaria
            $table->bigInteger('cpf');
            $table->string('nome');
            $table->string('telefone');
            $table->timestamps();
        });
        Artisan::call('db:seed', array('--class' => 'VendedorTableSeeder', '--force' => null));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //remove a tabela da base de dados  
    public function down()
    {
        Schema::dropIfExists('vendedor');
    }
}
