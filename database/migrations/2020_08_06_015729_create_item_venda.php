<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_venda', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('id_venda')->unsigned();
            $table->foreign('id_venda')->references('id')->on('vendas')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto')->onDelete('cascade')->onUpdate('cascade');
            
            $table->double('valor_unitario')->unsigned();
            $table->integer('quantidade_comprada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_venda');
    }
}
