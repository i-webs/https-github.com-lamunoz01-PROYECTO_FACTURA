<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias',function(Blueprint $table){
        	$table->String('CTG_COD',20)->unique(); //CODIGO CATEGORIA
        	$table->String('CTG_NOM',50); //NOMBRE O DESCRIPCION DE CATEGORIA
        	$table->primary(['CTG_COD']);
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
        Schema::dropIfExists('categorias');
    }
}
